<?php
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$peso = $_POST['weight'];
$categoria = $_POST['categoria'];

$conn = new mysqli("localhost", "root", "", "products");

$sql = "INSERT INTO products (ProductName, ProductDescription, ProductPrice, ProductAmount, ProductWeight, ProductCategory) 
        VALUES ('$nombre', '$descripcion', $precio, $cantidad, '$peso', '$categoria')";

if ($conn->query($sql)) {
    echo "
    <html>
        <head>
            <meta http-equiv='refresh' content='3;url=index.html'>
        </head>
        <body>
            <h2>Inserción de producto completada.</h2>
            <p>Serás redirigido al formulario en 3 segundos...</p>
        </body>
    </html>
    ";
} else {
    echo "Error al insertar: " . $conn->error;
}

$conn->close();
?>
