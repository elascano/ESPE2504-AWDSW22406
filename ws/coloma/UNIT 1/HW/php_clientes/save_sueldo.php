<?php
include("db.php");

// Verificar si la conexión fue exitosa
if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

if (isset($_POST['save_sueldo'])) {
    // Sanitizar y validar los datos
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $sueldo = mysqli_real_escape_string($conn, $_POST['sueldo']);

    // Consulta SQL
    $query = "INSERT INTO clientes(titulo, sueldo) VALUES ('$title', '$sueldo')";

    // Ejecutar la consulta
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Error en la consulta: " . mysqli_error($conn));
    }

/*echo '¡Se guardó correctamente!'; */
$_SESSION['message']='Sueldo guardado Correctamente';
$_SESSION['message_type']='success';

header("Location: index.php");
}
?>
