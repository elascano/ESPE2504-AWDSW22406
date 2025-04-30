<?php
$host = 'localhost';
$dbname = 'computers';
$username = 'root';
$password = 'rootroot';

$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_SILENT);
?>