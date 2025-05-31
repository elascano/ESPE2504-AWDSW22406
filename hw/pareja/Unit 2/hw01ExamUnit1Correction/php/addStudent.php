<?php
include("db_connection.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = htmlspecialchars($_POST['name']);
        $class = htmlspecialchars($_POST['class']);
        $gradeUnit1 = floatval($_POST['gradeUnit1']);
        $gradeUnit2 = floatval($_POST['gradeUnit2']);
        $gradeUnit3 = floatval($_POST['gradeUnit3']);
        $finalGrade = floatval($_POST['finalGrade']);

        $insertQuery = "INSERT INTO students (`name`, `class`, `grade_unit1`, `grade_unit2`, `grade_unit3`, `final_grade`)
                VALUES (?,?,?,?,?,?)";
        $insert = $conn->prepare($insertQuery);
        $insert->bind_param("ssdddd",
            $name,
            $class,
            $gradeUnit1,
            $gradeUnit2,
            $gradeUnit3,
            $finalGrade
    );
    if($insert->execute())
            {
                header("Location: ../html/studentsList.php");
            }
        else
        {
                echo("Failure to add student");
        }
    } else {
        echo "Invalid request method";
    }
?>