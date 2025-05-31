<?php
    $connection = new mysqli("localhost","root", "", "tech_store");

    if($connection->connect_error){
        die("Connection failed: ".$connection->connect_error);
    }

    if(isset($_POST['accept'])){
        $name=$_POST['name'];
        $description=$_POST['description'];
        $category=$_POST['category'];
        $price=$_POST['price'];
        $stock=$_POST['stock'];

        $sql="INSERT INTO products (name, description,category,price,stock) 
        VALUES ('$name','$description','$category',$price,$stock)";

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
