<?php
    $typeComputer = !empty($_POST['txtTypeComputer']) ? $_POST['txtTypeComputer'] : '';
    $capacityRam = !empty($_POST['txtCapacityRam']) ? $_POST['txtCapacityRam'] : '';
    $brand = !empty($_POST['txtBrand']) ? $_POST['txtBrand'] : '';
    $ssd = !empty($_POST['rdSSD']) ? $_POST['rdSSD'] : '';
    $numberprocess = !empty($_POST['txtNumberProcess']) ? $_POST['txtNumberProcess'] : '';
    $hdd = !empty($_POST['rdHDD']) ? $_POST['rdHDD'] : '';
    $height = !empty($_POST['txtHeight']) ? $_POST['txtHeight'] : '';
    $so = !empty($_POST['txtSO']) ? $_POST['txtSO'] : '';
    $weight = !empty($_POST['txtWeight']) ? $_POST['txtWeight'] : '';


    if($$typeComputer && $capacityRam && $brand && $ssd && $numberprocess && $hdd && $height && $so && $weight){
        include('conexion.php');
        $consulta="Insert into computer(TypeComputer, Brand, NumberProcess, Height, Weight, CapacityRam, SSD, HDD, SystemOperative) values ('$typeComputer','$capacityRam','$brand','$ssd','$numberprocess','$hdd','$height','$so','$weight')";
        if(!mysqli_query($conn,$consulta)){
            die('Its not possible to register');
        }

    }

    header("Location: ../index.html");

?>