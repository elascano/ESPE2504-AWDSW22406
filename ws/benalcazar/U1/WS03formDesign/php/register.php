
<?php
include("conexion.php");

    $brand = trim($_POST['brand']);
    $cpu_name = trim($_POST['cpu_name']);
    $cpu_cores = (int) $_POST['cpu_cores'];
    $cpu_frecuency = (float) $_POST['cpu_frecuency'];
    $mainboard_name = trim($_POST['mainboard_name']);
    $ram_size = (float) $_POST['ram_size'];
    $rom_size = (float) $_POST['rom_size'];
    $gpu_name = trim($_POST['gpu_name']);
    $gpu_size = trim($_POST['gpu_size']);

    $query = "INSERT INTO register (brand, cpu_name, cpu_cores, cpu_frecuency, mainboard_name, ram_size, rom_size, gpu_name, gpu_size) 
        VALUES ('$brand', '$cpu_name', $cpu_cores, $cpu_frecuency, '$mainboard_name', $ram_size, $rom_size, '$gpu_name', '$gpu_size')";

    $result = mysqli_query($conexion, $query);

    if ($result) {
        echo " Registro insertado correctamente.";
    } else {
        echo "Error al insertar el registro: " . mysqli_error($conexion);
    }
?>
