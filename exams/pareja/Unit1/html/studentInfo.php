<?php
include("../php/dbConnection.php");
$studentId=$_POST['studentId']
$query="SELECT * FROM students WHERE student_id='$studentId'";
$studentData="";
$result=mysqli_query($conn,$query);
if($result)
{
    $information=mysqli_fetch_assoc($result);
    $studentData.="
        <tr>
                <td>".htmlspecialchars($information['name'])."</td>
                <td>".htmlspecialchars($information['age'])."</td>
                <td>".htmlspecialchars($information['level'])."</td>
                <td>".htmlspecialchars($information['email'])."</td>
                <td>".htmlspecialchars($information['phone_number'])."</td>
            </tr>
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Student information</title>
</head>
<body>
    <div class="container">
        <h2>Student information</h2>
        <table>
            <tr>
                <th>Student Name</th>
                <th>Age</th>
                <th>Level</th>
                <th>Email</th>
                <th>Parent contact number:</th>
            </tr>
            <?=echo($studentData)?>
        </table>
    </div>
</body>
</html>