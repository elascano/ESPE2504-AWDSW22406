<?php
header('Content-Type: application/json');
include "connection.php";

$parkname = $_POST['value'];

$sql = 'SELECT * FROM `park` WHERE PARK_NAME= ?';
$stmt = $connection->prepare($sql);
$stmt->bind_param("s", $parkname);

$result = $stmt->get_result();

$parkdata= "";
while($row = $result->fetch_assoc()) {

    $park_area= $row['PARK_WIDTH'] * $row['PARK_LENGHT'];
    $park_total_cost = $row['PARK_FEE'] * $row['PARK_CAPACITY'];
    $parkdata .= '<tr><td> '.$row['PARK_NAME'].'</td>
            <td> '.$row['PARK_FEE'].'</td>
            <td> '.$row['PARK_CAPACITY'].'</td>
            <td> '.$park_area.'</td>
            <td> '.$park_total_cost.'</td>
            </td></tr>';
}
$connection->close();
echo json_encode($parkdata);
?>