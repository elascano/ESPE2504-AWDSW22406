<?php
include 'db_connection.php';

if (isset($_POST['btnAcc'])){

    $ID=$_POST['textID'];
    $Monitor=$_POST['textMonitor'];
    $NProcessors=$_POST['textNProcessors'];
    $HardDisk=$_POST['textHDisk'];
    $Processor=$_POST['textProcessors'];
    $RAM=$_POST['textRAM'];
    $OSystem=$_POST['textOSystem'];
    $MPrice=$_POST['textMPrice'];
    $Price=$_POST['textPrice'];
    $AStock=$_POST['textAStock'];

    $sql="INSERT TO computers (ID, Monitor, NumberofProcessors, HardDisk, Processor, RAM, OperativeSystem, ManufacturePrice, Price, AmountStock) 
        VALUES ('$ID','$Monitor','$NProcessors','$HardDisk','$Processor','$RAM','$OSystem','$MPrice','$Price','$AStock')";

    if($conn->query($sql)===TRUE){
        echo"Register is complete";
    }else{
        echo "Error in the Register";
    }

    $conn->close();
}else{
    echo "Error";
}
?>