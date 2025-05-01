<?php
    $id = !empty($_POST['txtId']) ? $_POST['txtId'] : '';
    $storeName = !empty($_POST['txtStoreName']) ? $_POST['txtStoreName'] : '';
    $ownerName = !empty($_POST['txtOwnerName']) ? $_POST['txtOwnerName'] : '';
    $location = !empty($_POST['txtLocation']) ? $_POST['txtLocation'] : '';
    $storeType = !empty($_POST['storeType']) ? $_POST['storeType'] : '';
    $categories = isset($_POST['categories']) ? implode(", ", $_POST['categories']) : '';

    if($id && $nombre && $passwor && $yearBorn && $level && $subjects){
        include('conexion.php');
        $consulta="Insert into stores(Id, StoreName, OwnerName, Location, StoreType, Categories) values ('$id','$storeName','$ownerName','$location','$storeType','$categories')";
        if(!mysqli_query($conn,$consulta)){
            die('Its not possible to register');
        }

    }

    header("Location: ../index.html");

?>