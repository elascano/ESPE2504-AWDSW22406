<?php
include("db.php");
if(isset($_POST['signUp'])){
    if(
        strlen($_POST['name'])>=1&&
        strlen($_POST['lastName'])>=1
    ){
        $name=trim($_POST['name']);
        $lastName=trim($_POST['lastName']);
        $consulta="INSERT INTO estudiantes(nombre,apellido)
            VALUES('$name','$lastName')";
        $resultado=mysqli_query($conn,$consulta);
            if($resultado){
                ?>
                    <h1 class="si">se completo el registro</h1>
                <?php
            }else{
                ?>
                <h1 class="no">no se pudo registrar</h1>
                <?php
            }
    }
}

if(isset($_POST['register_event'])){
    if(
        strlen($_POST['event_name']) >= 1 &&
        strlen($_POST['event_date']) >= 1 &&
        strlen($_POST['location']) >= 1 &&
        strlen($_POST['max_attendees']) >= 1 &&
        strlen($_POST['event_type']) >= 1
    ){
        $event_name = trim($_POST['event_name']);
        $event_date = trim($_POST['event_date']);
        $location = trim($_POST['location']);
        $max_attendees = (int)$_POST['max_attendees'];
        $event_type = trim($_POST['event_type']);

        $consulta = "INSERT INTO events(event_name, event_date, location, max_attedees, event_type)
            VALUES('$event_name', '$event_date', '$location', $max_attendees, '$event_type')";
        $resultado = mysqli_query($conn, $consulta);

        if($resultado){
            echo "<h1>Event registered successfully</h1>";
        } else {
            echo "<h1>Failed to register event</h1>";
        }
    }
}
?>