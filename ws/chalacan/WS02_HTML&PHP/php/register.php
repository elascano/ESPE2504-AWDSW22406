<?php
include("db.php");
    if(isset($_POST['ACCEPT'])){
        if(
            strlen($_POST['processor']) >= 1 &&
            strlen($_POST['motherBoard']) >= 1 &&
            strlen($_POST['ram']) >= 1 &&
            strlen($_POST['gpu']) >= 1 &&
            strlen($_POST['powerSuply']) >= 1 &&
            strlen($_POST['refrigerationSystem']) >= 1 &&
            strlen($_POST['rgb']) >= 1 &&
            strlen($_POST['case']) >= 1 &&
            strlen($_POST['entryDate']) >= 1&&
            strlen($_POST['price']) >=1
        ){
            $processor= trim($_POST['processor']);
            $motherBoard= trim($_POST['motherBoard']) ;
            $ram=trim($_POST['ram']) ;
            $gpu=trim($_POST['gpu']) ;
            $powerSuply=trim($_POST['powerSuply']) ;
            $refrigerationSystem=trim($_POST['refrigerationSystem']) ;
            $rgb=trim($_POST['rgb']) ;
            $case=trim($_POST['case']) ;
            $entryDate=trim($_POST['entryDate']) ;
            $price=trim($_POST['price']);

            $consulta = "INSERT INTO computer(Processor,MotherBoard,RAM,GPU,PowerSupply,RefrigerationSystem,RGB,PCase,EntryDate,Price )
            VALUES('$processor', '$motherBoard', '$ram', '$gpu', '$powerSuply','$refrigerationSystem','$rgb','$case','$entryDate', $price)";
            $resultado = mysqli_query($conn, $consulta);

            if($resultado){
                echo "<h1>Event registered successfully</h1>";
            } else {
                echo "<h1>Failed to register </h1>";
            }
        }
    }
?>
