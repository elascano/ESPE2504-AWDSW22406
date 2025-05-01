<?php
$servername = "localhost"; // O usa la IP o el nombre de dominio si no es local
$username = "admin"; // O el nombre de usuario de MySQL que tienes configurado
$password = "admin"; // La contraseña de tu usuario de MySQL
$dbname = "multicine"; // Nombre de la base de datos

// Crear la conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conexion->connect_error) {
    die("La conexion fallo: " . $conexion->connect_error);
}
echo "Conectado exitosamente a la base de datos: '$dbname'";
?>
