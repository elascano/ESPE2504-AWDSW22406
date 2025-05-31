<?php
include "connection.php";

$parkname = $_POST['value'];
$sql = 'SELECT * FROM park WHERE PARK_NAME= '.$parkname;
$row = mysqli_query($connection,$sql);

echo $row;

?>