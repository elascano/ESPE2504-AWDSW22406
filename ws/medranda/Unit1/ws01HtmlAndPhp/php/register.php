<?php
include("connection.php");

$ProcessorM = $_POST["slComputerBrand"];
$ProcessorN = $_POST["txtProcessorName"];
$RamM= $_POST["numRam"];
$DiscT = $_POST["slDisc"];
$RomM = $_POST["numRom"];
$hasGPU = $_POST["rdGPU"];
$GPUN = $_POST["txtGPUName"];
$Manufacturing = $_POST["numManufacturing"];
$Price = $_POST["numPrice"];


$sql = "INSERT INTO computer (ProcessorBrand, ProcessorName, RamMemory, KindOfDisc, RomMemory, HasGPU, GPUName, Manufacturing, Price) VALUES (?,?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param("ssisiisdd",$ProcessorM, $ProcessorN, $RamM,$DiscT,$RomM,$hasGPU,$GPUN,$Manufacturing,$Price);

if($stmt->execute()){
    echo("The registration was made succesfully");
}else{
    echo("Can not register the information error: ".$stmt->error);
}

$stmt->close();
$conn->close();

?>