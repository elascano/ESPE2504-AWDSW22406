<?php
include 'db.php';

$title = $_POST['title'];
$artist = $_POST['artist'];
$duration = $_POST['duration'];
$genre = $_POST['genre'];
$release_date = $_POST['release_date'];

$sql = "INSERT INTO songs (title, artist, duration, genre, release_date)
        VALUES ('$title', '$artist', $duration, '$genre', '$release_date')";

if ($conn->query($sql) === TRUE) {
    echo "Canción registrada exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
