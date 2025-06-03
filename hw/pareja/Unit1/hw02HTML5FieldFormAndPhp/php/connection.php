<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hotel";
//Connection
$conn= new mysqli($servername, $username, $password, $dbname);

if($conn->connection_error)
{
    echo("Connection Success");
}
?>
