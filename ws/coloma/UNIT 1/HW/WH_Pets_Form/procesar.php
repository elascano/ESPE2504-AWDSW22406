<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = htmlspecialchars($_POST["nombre"]);
  $email = htmlspecialchars($_POST["email"]);
  $telefono = htmlspecialchars($_POST["telefono"]);
  $tipo = htmlspecialchars($_POST["tipo"]);
  $peso = floatval($_POST["peso"]);

  echo "<h2>Datos recibidos:</h2>";
  echo "<ul>";
  echo "<li><strong>Nombre:</strong> $nombre</li>";
  echo "<li><strong>Email:</strong> $email</li>";
  echo "<li><strong>Teléfono:</strong> $telefono</li>";
  echo "<li><strong>Tipo de mascota:</strong> $tipo</li>";
  echo "<li><strong>Peso:</strong> $peso kg</li>";
  echo "</ul>";
} else {
  echo "Acceso no permitido.";
}
?>
