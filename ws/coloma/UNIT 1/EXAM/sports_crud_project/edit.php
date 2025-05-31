<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM sports WHERE id = $id");
$row = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stmt = $conn->prepare("UPDATE sports SET name=?, type=?, players=?, duration=?, popularity=? WHERE id=?");
    $stmt->bind_param("ssiisi", $_POST['name'], $_POST['type'], $_POST['players'], $_POST['duration'], $_POST['popularity'], $id);
    $stmt->execute();
    header("Location: index.php");
    exit();
}
?>

<h2>Edit Sport</h2>
<form method="POST">
    <input type="text" name="name" value="<?= $row['name'] ?>" required><br>
    <input type="text" name="type" value="<?= $row['type'] ?>"><br>
    <input type="number" name="players" value="<?= $row['players'] ?>"><br>
    <input type="number" name="duration" value="<?= $row['duration'] ?>"><br>
    <input type="text" name="popularity" value="<?= $row['popularity'] ?>"><br>
    <input type="submit" value="Update Sport">
</form>
<p><a href="index.php">⬅ Back to List</a></p>