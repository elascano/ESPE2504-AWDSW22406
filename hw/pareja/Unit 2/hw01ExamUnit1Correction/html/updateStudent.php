<?php
$studentId=$_GET['id'];
include("../php/getDataForModify.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Data Update</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="headContainer">
        <p>
            <a href="../index.html">< Go Back</a>
        </p>
    </div>
<div class="container">
    <h2>Student Data Update</h2>
    <form action="<?php echo('../php/modifyStudentData.php?id='.$studentId)?>" method="POST" id="newStudentForm" name="newStudentForm">
        <div class="mb-3">
            <label for="name" class="form-label">Student Name</label>
            <input type="text" class="formControl" id="name" name="name" 
            value="<?php echo($information['name'])?>"
            required>
        </div>
        
        <div class="mb-3">
            <label for="class" class="form-label">Class</label>
            <input type="text" class="formControl" id="class" name="class" 
            value="<?php echo($information['class'])?>"
            required>
        </div>
        
        <div class="mb-3">
            <label for="grade_unit1" class="form-label">Grade - Unit 1</label>
            <input type="number" step="0.01" class="formControl" id="gradeUnit1" name="gradeUnit1" 
            value="<?php echo($information['grade_unit1'])?>"
            required onchange="controlGrade('gradeUnit1'), calculateFinalGrade()">
        </div>
        
        <div class="mb-3">
            <label for="grade_unit2" class="form-label">Grade - Unit 2</label>
            <input type="number" step="0.01" class="formControl" id="gradeUnit2" name="gradeUnit2" 
            value="<?php echo($information['grade_unit2'])?>"
            required onchange="controlGrade('gradeUnit2'), calculateFinalGrade()">
        </div>
        
        <div class="mb-3">
            <label for="grade_unit3" class="form-label">Grade - Unit 3</label>
            <input type="number" step="0.01" class="formControl" id="gradeUnit3" name="gradeUnit3"
            value="<?php echo($information['grade_unit3'])?>"
            required onchange="controlGrade('gradeUnit3'), calculateFinalGrade()">
        </div>
        
        <div class="mb-3">
            <label for="final_grade" class="form-label">Final Grade</label>
            <input type="number" readonly step="0.01" class="formControl" id="finalGrade" name="finalGrade" 
            value="<?php echo($information['final_grade'])?>"
            required>
        </div>
        <br>
        <button type="submit">Update</button>
    </form>
</div>
<script src="../javascript/newStudentControl.js"></script>
</body>
</html>