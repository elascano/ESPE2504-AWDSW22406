<?php
// Configuración de conexión
$serverName = "localhost"; 
$connectionInfo = array(
    "Database" => "GamerDB",
    "UID" => "sa",
    "PWD" => "slvplanA2003", 
    "CharacterSet" => "UTF-8"
);

$conn = sqlsrv_connect($serverName, $connectionInfo);

if (!$conn) {
    die("❌ Error de conexión: " . print_r(sqlsrv_errors(), true));
}

$gamer_id = $_GET['gamer_id'];
$full_name = $_GET['full_name'];
$nickname = $_GET['nickname'];
$favorite_game = $_GET['favorite_game'];
$country = $_GET['select'];

$sql = "INSERT INTO Gamers (gamer_id, full_name, nickname, favorite_game, country)
        VALUES (?, ?, ?, ?, ?)";
$params = array($gamer_id, $full_name, $nickname, $favorite_game, $country);

$stmt = sqlsrv_query($conn, $sql, $params);

if ($stmt === false) {
    die("❌ Error al insertar: " . print_r(sqlsrv_errors(), true));
}

echo "✅ Registro exitoso. Bienvenido, $nickname!";
sqlsrv_close($conn);
?>
