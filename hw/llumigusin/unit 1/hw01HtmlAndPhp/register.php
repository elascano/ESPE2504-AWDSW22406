<?php
// Incluir archivo de conexión
include 'db_connection.php';

// Verificar si el formulario fue enviado
if (isset($_POST['btnAcc'])) {
    // Obtener datos del formulario
    $id = $_POST['txtID'];
    $nameBook = $_POST['txtNameBook'];
    $author = $_POST['txtAuthor'];
    $genre = $_POST['txtGenere'];
    $year = $_POST['txtYear'];
    // Insertar en la base de datos
    $sql = "INSERT INTO books (id, name_book, author, genre, year_of_publication) 
            VALUES ('$id', '$nameBook', '$author', '$genre', '$year')";

    if ($conn->query($sql) === TRUE) {
        echo "Libro registrado exitosamente.";
    } else {
        echo "Error al registrar el libro: " . $conn->error;
    }

    // Cerrar conexión
    $conn->close();
} else {
    echo "Formulario no enviado correctamente.";
}
?>
