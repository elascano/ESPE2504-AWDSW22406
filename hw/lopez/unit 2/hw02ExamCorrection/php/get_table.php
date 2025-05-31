<?php
include "connection.php";

$sql = 'SELECT * FROM `park`';
$value = mysqli_query($connection,$sql);
$parkdata= "";

while($row = mysqli_fetch_assoc($value)) {
    $park_area= $row['PARK_WIDTH'] * $row['PARK_LENGHT'];
    $park_total_cost = $row['PARK_FEE'] * $row['PARK_CAPACITY'];
    $parkdata .= '<tr><td>'.$row['PARK_NAME'].'</td>
            <td>'.$row['PARK_FEE'].'</td>
            <td>'.$row['PARK_CAPACITY'].'</td>
            <td>'.$park_area.'</td>
            <td>'.$park_total_cost.'</td>
            </td></tr>';
}

$connection->close();
echo json_encode($parkdata);

?>