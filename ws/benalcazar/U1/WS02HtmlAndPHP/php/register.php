<?php
include 'conexion.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $brand = $_POST['txtBrand'];
    $cpuName = $_POST['txtCpuName'];
    $cpuCores = $_POST['numCpuCores'];
    $cpuFrequency = $_POST['numCpuFrecuency'];
    $nameMainboard = $_POST['txtNameMainboard'];
    $ramSize = $_POST['numRamSize'];
    $romSize = $_POST['numRomSize'];
    $gpuName = $_POST['txtGpuName'];
    $gpuSize = $_POST['numGpuSize'];

    if (empty($brand) || empty($cpuName) || empty($nameMainboard) || empty($gpuName)) {
        echo "<script>alert('Todos los campos son obligatorios'); window.history.back();</script>";
    } else {
        $sql = "INSERT INTO register (Brand, CPU_name, GPU_cores, GPU_frecuency, Name_mainboard, Ram_size, Rom_size, Gpu_name, Gpu_size) 
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if ($stmt = $conexion->prepare($sql)) {
            $stmt->bind_param("ssiisiiis", $brand, $cpuName, $cpuCores, $cpuFrequency, $nameMainboard, $ramSize, $romSize, $gpuName, $gpuSize);

            if ($stmt->execute()) {
                echo "<script>alert('¡Datos registrados correctamente!'); window.location.href='../index.html';</script>";
            } else {
                echo "<script>alert('Error al registrar los datos: " . $stmt->error . "'); window.history.back();</script>";
            }

            $stmt->close();
        } else {
            echo "<script>alert('Error al preparar la consulta: " . $conexion->error . "'); window.history.back();</script>";
        }
    }

    // Cerrar la conexión
    $conexion->close();
} else {
    echo "<script>alert('Acceso denegado'); window.location.href='../index.html';</script>";
}
?>
