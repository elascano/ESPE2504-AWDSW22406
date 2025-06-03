<?php
$host = 'sql105.infinityfree.com';
$user = 'if0_39153171';
$password = 'b8zK1fyIHPJ';
$database = 'if0_39153171_empresa_x';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die('Error de conexión: ' . mysqli_connect_error());
}

mysqli_set_charset($conn, 'utf8');
?>