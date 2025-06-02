<?php
$host="sql102.infinityfree.com";
$user="if0_39088451";
$password="Marpar1203";
$database="if0_39088451_students";
$conn=new mysqli($host, $user,$password,$database);

if ($conn->connect_error) {
    die("Connection error: " . $conn->connect_error);
} else {
}
?>