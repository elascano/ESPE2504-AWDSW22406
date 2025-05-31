<?php include("db.php")  ?>
<?php include("includes/header.php")?>



<div class="container p-4">
    <div class="col-md-4">


    <?php if(isset($_SESSION['message'])){   ?>
       
        <div class="alert alert-<?=$_SESSION['message_type'] ?> alert-dismissible fade show" role="alert">
        <?=$_SESSION['message']?>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


    <?php  session_unset(); } ?>
        <div class="card card-body">
            <form action="save_sueldo.php" method="POST">
                <div class="form-group">
                    <input type="text" name="title" class="form-control"
                    placeholder="Inserte titulo" autofocus>
                </div>

                <div class="form-group">
                    <textarea name="sueldo" rows="2" class="form-contol" 
                    placeholder="valor sueldo.."></textarea>
                </div>

                <input type="submit" class="btn btn-success btn-block"
                name="save_sueldo" value="Save_sueldo">
        

            </form>
        </div>
    </div>



    <div class="col-md-8">
        <table  class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Sueldo</th>
                    <th>Guardado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    $query="SELECT * FROM clientes";
                    $result_sueldos=mysqli_query($conn,$query);
                    while ($row=mysqli_fetch_array($result_sueldos)) {
                ?>
                        <tr>
                            <td> <?php echo $row['titulo'] ?></td>
                            <td> <?php echo $row['sueldo'] ?></td>
                            <td> <?php echo $row['creacion'] ?></td>
                            <td> 
                                <a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-secondary"> <i class="fas fa-marker" ></i></a> 
                                <a href="delete_task.php?id=<?php echo $row['id']?>" class="btn btn-danger"> <i class="far fa-trash-alt" ></i></a> 



                            </td>
                        </tr>
                <?php 
                }
                ?>
                    
                  
            
            </tbody>
        </table>
    </div>

</div>

<?php include("includes/footer.php")?>