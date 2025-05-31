<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("INSERT INTO sports (name, type, players, duration, popularity) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("ssiis", $_POST['name'], $_POST['type'], $_POST['players'], $_POST['duration'], $_POST['popularity']);
    $stmt->execute();
    header("Location: index.php");
    exit();
}
?>

<h2>Add New Sport</h2>
<form method="POST">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="text" name="type" placeholder="Type"><br>
    <input type="number" name="players" placeholder="Players"><br>
    <input type="number" name="duration" placeholder="Duration"><br>
    <input type="text" name="popularity" placeholder="Popularity"><br>
    <input type="submit" value="Add Sport">
</form>
<p><a href="index.php">⬅ Back to List</a></p>