<?php
include("conn.php");
$Cid = ($_POST["computerid"]);
$Ipadd = ($_POST["ipadd"]);
$manf = ($_POST["manf"]);
$crtyr = ($_POST["creationy"]);
$pross = ($_POST["pross"]);
$memcap = ($_POST["memcapcty"]);
$len = ($_POST["lenght"]);
$wdt = ($_POST["widht"]);
$rep = ($_POST["repnum"]);
$price = ($_POST["price"]);

if(!($Cid=="") && !($Ipadd=="") && !($manf=="") && !($crtyr=="") && !($pross=="") && !($memcap=="") && !($len=="") && !($wdt=="") 
&& !($rep=="") && !($price=="") ){
$stmt= $conn->prepare("INSERT INTO computer_info (ComputerId, IpAddress, Manufacturer, YearofCreation, Processor
, Memory_Capacity,Lenght, Widht, RepairsNumber, Price) VALUES (?,?,?,?,?,?,?,?,?,?)") ;
$stmt->bind_param("sssisdddid", $Cid, $Ipadd, $manf,$crtyr,$pross, $memcap, $len, $wdt, $rep, $price);
$stmt->execute();
    header("Location: ../index.html");
$stmt->close();
$conn->close();
}else{
echo "no data sent";
exit;
}
?>