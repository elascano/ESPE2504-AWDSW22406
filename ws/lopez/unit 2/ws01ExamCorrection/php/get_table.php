<?php
include "connection.php";

$sql = 'SELECT * FROM park';
$value = mysqli_query($connection,$sql);
$park_data = "";
while($row = mysqli_fetch_assoc() )
echo $row;

?>