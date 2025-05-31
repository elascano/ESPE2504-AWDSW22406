<?php
include "connection.php";

$parkname = $_POST['name'];
$parkfee = $_POST['fee'];
$parkcapacity = $_POST['capacity'];

$sql = 'INSERT INTO park (`PARK_NAME`, `PARK_FEE`, `PARK_CAPACITY`) VALUES (?,?,?)';
$stmt = $connection -> prepare($sql);
mysqli_stmt_bind_param($stmt,"sdd",$parkname,$parkfee, $parkcapacity);

if(mysqli_execute($stmt)){
 $stmt->close();
 $connection->close();
 echo json_encode("Ingreso Correcto");
}else{
    echo "error";
}

?>