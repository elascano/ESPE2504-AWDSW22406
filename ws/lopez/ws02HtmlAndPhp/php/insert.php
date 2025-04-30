<?php
include("conn.php");
$id = trim($_POST["id"]);
$name = trim($_POST["name"]);
$quantity = trim($_POST["number"]);
$date = trim($_POST["date"]);
$hour = trim($_POST["hour"]);
$vip = trim($_POST["vip"]);


if(isset($id) && isset($name) && isset($quantity) && isset($date) && isset($hour) && isset($vip)){
    $stmtc= $conn->prepare("INSERT INTO client (personal_id, name) VALUES (?, ?)");
    $stmtc->bind_param("ss", $id, $name);
    $stmtc->execute();
    $idclient = $conn->insert_id;
    $stmtc->close();
    if($hour == "nine"){
        $hour = "09:00:00";
    }else if($hour == "eleven"){
        $hour = "11:00:00";
    }else if($hour == "one"){
        $hour = "13:00:00";
    }else if($hour == "three"){
        $hour = "15:00:00";
    }else if($hour == "five"){
        $hour = "17:00:00";
    }else if($hour == "seven"){
        $hour = "19:00:00";
    }

    $stmtd = $conn->prepare("INSERT INTO reservation (personal_id, clientsnumber, reservation_date, reservation_time, vip_exp) VALUES ( ?,?, ?, ?, ?)");
    $stmtd->bind_param("iisss", $idclient, $quantity, $date, $hour, $vip);
    $stmtd->execute();
    $stmtd->close();

    $conn->close();
    header("Location: ../index.html");
}else{
echo "no data sent";
header("Location: ../index.html");
exit;
}
?>