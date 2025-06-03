<?php
$mysqli = new mysqli("localhost", "root", "", "customerdb");

if (isset($_GET["indice"])) {
    $indice = $_GET["indice"];
    $stmt = $mysqli->prepare("DELETE FROM customers WHERE indice=?");
    $stmt->bind_param("s", $indice);
    $stmt->execute();
    echo "Customer deleted. <a href='read.php'>Back to list</a>";
}
$mysqli->close();
?>
