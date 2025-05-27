<?php
include 'db_connection.php';

if (isset($_POST['btnAcc'])) {
    $id = $_POST['txtID'];
    $NumberApartament = $_POST['txtNumberApartament'];
    $price = $_POST['txtPrice'];
    $LocationA = $_POST['txtLocation'];
    $Width = $_POST['txtAlture'];
    $LengthA = $_POST['txtLength'];
    $sql = "INSERT INTO apartments (id, NumberApartament, lengthA, Width, price, LocationA) 
            VALUES ('$id', '$NumberApartament', '$LengthA', '$Width', '$price','$LocationA')";

    if ($conn->query($sql) === TRUE) {
        echo "Libro registrado exitosamente.";
    } else {
        echo "Error al registrar el libro: " . $conn->error;
    }


    $conn->close();
} else {
    echo "Formulario no enviado correctamente.";
}
?>
