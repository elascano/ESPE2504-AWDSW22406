<?php
include("db_connection.php");
$studentId=$_GET['id'];
$deleteQuery="UPDATE `students` SET `is_active`=FALSE WHERE `student_id`=?";
 $delete = $conn->prepare($deleteQuery);
 $delete->bind_param("i", $studentId);
 if($delete->execute())
            {
                //Successful Update
                header("Location: ../html/studentsList.php");
            }
        else
        {
                //Failed update
                echo("Failure to delete student");
        }
?>