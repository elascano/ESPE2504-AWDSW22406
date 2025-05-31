<?php
include("db_connection.php");
$query= "SELECT * FROM students WHERE student_id='$studentId'";
$studentData="";
$result=mysqli_query($conn,$query);
if($result)
{
    $information=mysqli_fetch_assoc($result);
}
?>