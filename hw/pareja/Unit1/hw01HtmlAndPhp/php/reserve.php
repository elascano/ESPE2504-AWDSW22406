<?php
include("connection.php");

//Data reception
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$resort=$_POST["resort"];
$companions=$_POST["companions"];
$checkin=$_POST["checkin"];
$checkout=$_POST["checkout"];
$info_mail=$_POST["info_mail"];

//Insertion query
$insertion="INSERT INTO `reservations`(`name`, `email`, `cellphone`, `resort`, `companions`, `checkin_date`, `checkout_date`, `receiveInfo`) 
VALUES ('$name','$email','$phone','$resort','$companions','$checkin','$checkout','$info_mail')";

if(mysqli_query($conn, $insertion))
{
    echo("Registration made successfully");
}
else{
    echo("Could not register");
}
?>