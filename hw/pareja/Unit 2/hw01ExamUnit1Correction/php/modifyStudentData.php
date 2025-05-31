<?php
include("db_connection.php");
$studentId=$_GET['id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $class = htmlspecialchars($_POST['class']);
        $gradeUnit1 = floatval($_POST['gradeUnit1']);
        $gradeUnit2 = floatval($_POST['gradeUnit2']);
        $gradeUnit3 = floatval($_POST['gradeUnit3']);
        $finalGrade = floatval($_POST['finalGrade']);

        $updateQuery = "UPDATE `students` SET 
        `name`=?,`class`=?,`grade_unit1`=?,`grade_unit2`=?,`grade_unit3`=?,`final_grade`=? WHERE student_id=?";
        $update = $conn->prepare($updateQuery);
        $update->bind_param("ssddddi",
            $name,
            $class,
            $gradeUnit1,
            $gradeUnit2,
            $gradeUnit3,
            $finalGrade,
            $studentId
    );
    if($update->execute())
            {
                //Successful Update
                header("Location: ../html/studentsList.php");
            }
        else
        {
                //Failed update
                echo("Failure to update student information");
        }
    } else {
        echo "Invalid request method";
    }
?>