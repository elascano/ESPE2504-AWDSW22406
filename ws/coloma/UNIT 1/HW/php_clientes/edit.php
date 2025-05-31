<?php
// Incluir archivo de conexión a la base de datos
include("db.php");

// Verificar si se ha recibido un ID por método GET
if(isset($_GET['id'])){
    $id=$_GET['id'];
    // Consulta para obtener los datos del cliente con el ID especificado
    $query="SELECT * FROM clientes WHERE id = $id";

    // Ejecutar la consulta
    $result=mysqli_query($conn, $query);

    // Verificar si se encontró exactamente un registro
    if(mysqli_num_rows($result)==1){

       // Obtener los datos del cliente
       $row=mysqli_fetch_array($result);
        $tittle=$row['titulo']; // Título del cliente
        $sueldo=$row['sueldo']; // Sueldo del cliente

    }

}

// Verificar si se ha enviado el formulario para actualizar datos
if(isset($_POST['updateBtn'])){
   $id=$_GET['id']; // Obtener el ID del cliente a actualizar
   $tittle=$_POST['tittle']; // Nuevo título desde el formulario
   $sueldo=$_POST['sueldo'];   // Nuevo sueldo desde el formulario
  // Las siguientes líneas están comentadas, podrían usarse para depuración
  // echo $tittle;
  // echo $sueldo;
  // echo $id;

   
   $query="UPDATE clientes set titulo=' $tittle',sueldo='$sueldo' WHERE id=$id ";
   mysqli_query($conn,$query);

  
   $_SESSION['message']='Datos Actualizados';
   $_SESSION['message_type']='warning';

   // Redirigir a la página principal
   header("location: index.php");
}

?>

<?php  include("includes/header.php")?>

<div class="container p-4">
    <div class="row">
        <div class="col-md4 mx-auto">
            <div class="card card-body">
                <!-- Formulario para editar los datos del cliente -->
                <form action="edit.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <!-- Campo de texto para editar el título -->
                        <input type="text" name="tittle" value="<?php echo $tittle ?>" class="form-control" placeholder="Edita el titulo">

                    </div>

                    <div class="form-group">
                        <!-- Área de texto para actualizar el sueldo -->
                        <textarea name="sueldo"  rows="2" class="form.control" placeholder="Actualiza"><?php echo $sueldo;?>  </textarea>
                    </div>
                    <!-- Botón para enviar el formulario y actualizar los datos -->
                    <button class=" btn btn-success" name="updateBtn">
                        Actualizar

                    </button>
                </form>
            </div>
        </div>
    </div>

</div>

<?php  include("includes/footer.php")?>
