
<?php
include("connection.php");

    $brand = trim($_POST['brand']);
    $cpu_name = trim($_POST['cpu_name']);
    $cpu_cores = (int) $_POST['cpu_cores'];
    $cpu_frecuency = (float) $_POST['cpu_frecuency'];
    $mainboard_name = trim($_POST['mainboard_name']);


    $query = "INSERT INTO computers (brand, cpu_name, cpu_cores, cpu_frecuency, mainboard_name) 
        VALUES ('$brand', '$cpu_name', $cpu_cores, $cpu_frecuency, '$mainboard_name')";


    $result = mysqli_query($conexion, $query);

    if ($result) {
        echo "<script>
            alert('Registro insertado correctamente.');
            window.location.href = '../index.html';
            </script>";
    } else {
        echo "Error al insertar el registro: " . mysqli_error($conexion);
    }
?>
