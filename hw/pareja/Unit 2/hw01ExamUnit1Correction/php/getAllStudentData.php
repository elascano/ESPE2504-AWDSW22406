<?php
include("db_connection.php");
$studentList="";
$listQuery="SELECT * FROM students WHERE `is_active`=TRUE";
$result = mysqli_query($conn,$listQuery);
while ($studentData=mysqli_fetch_assoc($result)) {
    $studentList .= "
        <tr>
            <td>" . htmlspecialchars($studentData['name']) . "</td>
            <td>" . htmlspecialchars($studentData['class']) . "</td>
            <td>" . htmlspecialchars($studentData['grade_unit1']) . "</td>
            <td>" . htmlspecialchars($studentData['grade_unit2']) . "</td>
            <td>" . htmlspecialchars($studentData['grade_unit3']) . "</td>
            <td>" . htmlspecialchars($studentData['final_grade']) . "</td>
            <td>
                <p><a href='updateStudent.php?id=" . urlencode($studentData['student_id']) . "'>Modify</a><br><a href='../php/deleteStudent.php?id=" . urlencode($studentData['student_id']) . "'>Delete</a></p>
            </td>
        </tr>
    ";
}
$conn->close();
?>