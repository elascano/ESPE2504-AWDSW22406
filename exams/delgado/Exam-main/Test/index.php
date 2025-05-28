<?php
$servername = "sql211.infinityfree.com";
$username = "if0_39084235";
$password = "wVGwHjEXw07RB";
$dbname = "if0_39084235_soccer_players_db";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['insert'])) {
    $name = $_POST['name'];
    $team = $_POST['team'];
    $position = $_POST['position'];
    $goals = $_POST['goals'];
    $assists = $_POST['assists'];
    $age = $_POST['age'];

    $sql = "INSERT INTO players (name, team, position, goals, assists, age) VALUES (:name, :team, :position, :goals, :assists, :age)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':name' => $name,
        ':team' => $team,
        ':position' => $position,
        ':goals' => $goals,
        ':assists' => $assists,
        ':age' => $age
    ]);
    header("Location: index.html?success=Player inserted successfully");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['search'])) {
    $search_term = $_POST['search_term'];
    $sql = "SELECT * FROM players WHERE id = :id OR name LIKE :name";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':id' => $search_term,
        ':name' => "%$search_term%"
    ]);
    $search_result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<h2>Search Results</h2><table><tr><th>ID</th><th>Name</th><th>Team</th><th>Position</th><th>Goals</th><th>Assists</th><th>Age</th><th>Performance Score</th></tr>";
    foreach ($search_result as $player) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($player['id']) . "</td>";
        echo "<td>" . htmlspecialchars($player['name']) . "</td>";
        echo "<td>" . htmlspecialchars($player['team']) . "</td>";
        echo "<td>" . htmlspecialchars($player['position']) . "</td>";
        echo "<td>" . htmlspecialchars($player['goals']) . "</td>";
        echo "<td>" . htmlspecialchars($player['assists']) . "</td>";
        echo "<td>" . htmlspecialchars($player['age']) . "</td>";
        echo "<td>" . (($player['goals'] * 2) + $player['assists']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    exit;
}

if (isset($_GET['load_all'])) {
    $sql = "SELECT * FROM players";
    $stmt = $conn->query($sql);
    $players = $stmt->fetchAll(PDO::FETCH_ASSOC);

    echo "<table><tr><th>ID</th><th>Name</th><th>Team</th><th>Position</th><th>Goals</th><th>Assists</th><th>Age</th><th>Performance Score</th></tr>";
    foreach ($players as $player) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($player['id']) . "</td>";
        echo "<td>" . htmlspecialchars($player['name']) . "</td>";
        echo "<td>" . htmlspecialchars($player['team']) . "</td>";
        echo "<td>" . htmlspecialchars($player['position']) . "</td>";
        echo "<td>" . htmlspecialchars($player['goals']) . "</td>";
        echo "<td>" . htmlspecialchars($player['assists']) . "</td>";
        echo "<td>" . htmlspecialchars($player['age']) . "</td>";
        echo "<td>" . (($player['goals'] * 2) + $player['assists']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    exit;
}
?>
