<?php
//Connection parameters
$servername="localhost";
$username="root";
$password="";
$database="computers";
//Connection 
$connection= new mysqli($servername,$username,$password,$database);

if(!$connection)
{
    die("Connection failed");
}
?>
