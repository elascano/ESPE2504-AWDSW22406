<?php
    $connection = new mysqli ("localhost","root","","tech_store");

    if($connection->connect_error){
        die("Connection failed: ".$connection->connect_error);
    }

    if($connection){
        echo("SUCCESFULL CONNECTION");
    }

    if(isset($_POST['ACCEPT'])){
        $name=$_POST['name'];
        $operating_system=$_POST['operating_system'];
        $oslenguage=$_POST['oslenguage'];
        $processor=$_POST['processor'];
        $ram=$_POST['ram'];
        $graphics=$_POST['graphics'];
        $date_purchase=$_POST['date_purchase'];
        $manufacturer=$_POST['manufacturer'];
        $price=$_POST['price'];
        $quantity=$_POST['quantity'];

        $sql = "INSERT INTO lab_computers (name, operating_system, oslenguage, processor, ram, graphics, date_purchase, manufacturer, price, quantity)
            VALUES ('$name','$operating_system','$oslenguage','$processor','$ram','$graphics',$date_purchase,'$manufacturer',$price,$quantity)";

        $insertion = mysqli_query($connection,$sql);

        if($insertion){
            echo ("Succesful insertion...</br>");
            echo ("<a href='../index.html'>GO BACK</a>");
        }else{
            echo ("Error: ".mysqli_error($connection)."</br>");
            echo ("<a href='../index.html'>GO BACK</a>");
        }
    }

    mysqli_close($connection);
    
?>