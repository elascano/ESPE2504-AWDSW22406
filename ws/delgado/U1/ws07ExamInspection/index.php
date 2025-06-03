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

$success_message = "";
$error_message = "";
$search_result = [];

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
    $success_message = "Player inserted successfully.";
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
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM players WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([':id' => $id]);
    $success_message = "Player deleted successfully.";
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['edit'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $team = $_POST['team'];
    $position = $_POST['position'];
    $goals = $_POST['goals'];
    $assists = $_POST['assists'];
    $age = $_POST['age'];

    $sql = "UPDATE players SET name = :name, team = :team, position = :position, goals = :goals, assists = :assists, age = :age WHERE id = :id";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':id' => $id,
        ':name' => $name,
        ':team' => $team,
        ':position' => $position,
        ':goals' => $goals,
        ':assists' => $assists,
        ':age' => $age
    ]);
    $success_message = "Player updated successfully.";
}

$sql = "SELECT * FROM players";
$stmt = $conn->query($sql);
$players = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Soccer Players Management</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-container { margin-bottom: 20px; }
        .form-container input, .form-container button { margin: 5px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        .success { color: green; }
        .error { color: red; }
    </style>
</head>
<body>
    <h1>Soccer Players Management</h1>

    <?php if ($success_message): ?>
        <p class="success"><?php echo htmlspecialchars($success_message); ?></p>
    <?php endif; ?>
    <?php if ($error_message): ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p>
    <?php endif; ?>

    <div class="form-container">
        <h2>Add Player</h2>
        <form method="post" action="index.php">
            <input type="text" name="name" placeholder="Name" required>
            <input type="text" name="team" placeholder="Team" required>
            <input type="text" name="position" placeholder="Position" required>
            <input type="number" name="goals" placeholder="Goals" required>
            <input type="number" name="assists" placeholder="Assists" required>
            <input type="number" name="age" placeholder="Age" required>
            <button type="submit" name="insert">Add Player</button>
        </form>
    </div>

    <div class="form-container">
        <h2>Search Player</h2>
        <form method="post" action="index.php">
            <input type="text" name="search_term" placeholder="ID or Name">
            <button type="submit" name="search">Search</button>
        </form>
    </div>

    <?php if (!empty($search_result)): ?>
        <h2>Search Results</h2>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Team</th>
                <th>Position</th>
                <th>Goals</th>
                <th>Assists</th>
                <th>Age</th>
                <th>Performance Score</th>
                <th>Actions</th>
            </tr>
            <?php foreach ($search_result as $player): ?>
                <tr>
                    <td><?php echo htmlspecialchars($player['id']); ?></td>
                    <td><?php echo htmlspecialchars($player['name']); ?></td>
                    <td><?php echo htmlspecialchars($player['team']); ?></td>
                    <td><?php echo htmlspecialchars($player['position']); ?></td>
                    <td><?php echo htmlspecialchars($player['goals']); ?></td>
                    <td><?php echo htmlspecialchars($player['assists']); ?></td>
                    <td><?php echo htmlspecialchars($player['age']); ?></td>
                    <td><?php echo ($player['goals'] * 2) + $player['assists']; ?></td>
                    <td>
                        <form method="post" action="index.php" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $player['id']; ?>">
                            <button type="submit" name="delete" onclick="return confirm('Are you sure you want to delete this player?');">Delete</button>
                        </form>
                        <form method="post" action="index.php" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $player['id']; ?>">
                            <input type="text" name="name" value="<?php echo htmlspecialchars($player['name']); ?>" required>
                            <input type="text" name="team" value="<?php echo htmlspecialchars($player['team']); ?>" required>
                            <input type="text" name="position" value="<?php echo htmlspecialchars($player['position']); ?>" required>
                            <input type="number" name="goals" value="<?php echo htmlspecialchars($player['goals']); ?>" required>
                            <input type="number" name="assists" value="<?php echo htmlspecialchars($player['assists']); ?>" required>
                            <input type="number" name="age" value="<?php echo htmlspecialchars($player['age']); ?>" required>
                            <button type="submit" name="edit">Edit</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    <?php endif; ?>

    <h2>All Players</h2>
    <button onclick="toggleTable()">Toggle Players Table</button>
    <table id="playersTable">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Team</th>
            <th>Position</th>
            <th>Goals</th>
            <th>Assists</th>
            <th>Age</th>
            <th>Performance Score</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($players as $player): ?>
            <tr>
                <td><?php echo htmlspecialchars($player['id']); ?></td>
                <td><?php echo htmlspecialchars($player['name']); ?></td>
                <td><?php echo htmlspecialchars($player['team']); ?></td>
                <td><?php echo htmlspecialchars($player['position']); ?></td>
                <td><?php echo htmlspecialchars($player['goals']); ?></td>
                <td><?php echo htmlspecialchars($player['assists']); ?></td>
                <td><?php echo htmlspecialchars($player['age']); ?></td>
                <td><?php echo ($player['goals'] * 2) + $player['assists']; ?></td>
                <td>
                    <form method="post" action="index.php" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $player['id']; ?>">
                        <button type="submit" name="delete" onclick="return confirm('Are you sure you want to delete this player?');">Delete</button>
                    </form>
                    <form method="post" action="index.php" style="display:inline;">
                        <input type="hidden" name="id" value="<?php echo $player['id']; ?>">
                        <input type="text" name="name" value="<?php echo htmlspecialchars($player['name']); ?>" required>
                        <input type="text" name="team" value="<?php echo htmlspecialchars($player['team']); ?>" required>
                        <input type="text" name="position" value="<?php echo htmlspecialchars($player['position']); ?>" required>
                        <input type="number" name="goals" value="<?php echo htmlspecialchars($player['goals']); ?>" required>
                        <input type="number" name="assists" value="<?php echo htmlspecialchars($player['assists']); ?>" required>
                        <input type="number" name="age" value="<?php echo htmlspecialchars($player['age']); ?>" required>
                        <button type="submit" name="edit">Edit</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <script>
        function toggleTable() {
            const table = document.getElementById('playersTable');
            const button = document.querySelector('button[onclick="toggleTable()"]');
            if (table.style.display === 'none') {
                table.style.display = 'table';
                button.textContent = 'Hide Players Table';
            } else {
                table.style.display = 'none';
                button.textContent = 'Show Players Table';
            }
        }
    </script>
</body>
</html>