<?php
include("../php/getSingleStudentData.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Search</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="headContainer">
        <p>
            <a href="../index.html">< Go Back</a>
        </p>
    </div>
    <div class="container">
        <h2>Student info search</h2>
        <form id="studentForm" method="post" action="">
            <p>Enter Student Id:<br>
                <input type="text" id="studentId" name="studentId">
            <br>
                <input type="submit" value="search">
            </p>
        </form>
    </div>
    <p></p>
    <div class="tablecontainer">
        <h1>Student Information</h1>
        <table id="studentList" class="dataTable">
            <tbody>
                <tr>
                    <th>Student Name</th>
                    <th>Class</th>
                    <th>Unit 1 Grade</th>
                    <th>Unit 2 Grade</th>
                    <th>Unit 3 Grade</th>
                    <th>Final Grade</th>
                    <th></th>
                </tr>
                 <?php echo($studentData)?>
            </tbody>
        </table>
    </div>
    
    <script></script>
</body>
</html>
