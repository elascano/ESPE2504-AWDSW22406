<?php 
include("db.php");

if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query="DELETE FROM clientes WHERE id=$id ";

       // Ejecutar la consulta
       $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error en la consulta: " . mysqli_error($conn));
    }


    $_SESSION['message']='Cliente removido exitosamente';
    $_SESSION['message_type']='danger';
    header("Location: index.php");




}
?>

