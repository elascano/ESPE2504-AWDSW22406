<?php
$host="sql200.infinityfree.com";
$user="if0_39118911";
$password="Mpareja1203";
$database="if0_39118911_studentsdb";
$conn=new mysqli($host, $user,$password,$database);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
} else {
}
?>