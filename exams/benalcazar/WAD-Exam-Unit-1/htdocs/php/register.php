<?php
include("connection.php");

    $brand = trim($_POST['brand']);
    $cpu_name = trim($_POST['cpu_name']);
    $cpu_cores = (int) $_POST['cpu_cores'];
    $cpu_frecuency = (float) $_POST['cpu_frecuency'];
    $mainboard_name = trim($_POST['mainboard_name']);


    $query = "INSERT INTO computer (brand, cpu_name, cpu_cores, cpu_frecuency, mainboard_name) 
        VALUES ('$brand', '$cpu_name', $cpu_cores, $cpu_frecuency, '$mainboard_name')";


    $result = mysqli_query($conexion, $query);

    if ($result) {
        echo "<script>
            alert('Registro insertado correctamente.');
            window.location.href = '../index.html';
        </script>";
    } else {
        $error = mysqli_error($conexion);
        echo "<script>
            alert('Error al insertar el registro: " . addslashes($error) . "');
            window.location.href = '../index.html';
        </script>";
    }
?>

