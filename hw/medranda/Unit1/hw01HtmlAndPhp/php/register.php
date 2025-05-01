<?php
include("connection.php");

$Name = $_POST["txtName"];
$Kind = $_POST["txtKind"];
$Breed = $_POST["txtBreed"];
$Gender = $_POST["rdGender"];
$Birthdate = $_POST["dtBirthday"];
$Behavior = $_POST["slBehavior"];

$sql = "INSERT INTO pet (Name, KindOfPet, PetBreed, Gender, Birthdate, Behavior) VALUES (?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);

$stmt->bind_param("ssssss",$Name, $Kind, $Breed,$Gender,$Birthdate,$Behavior);

if($stmt->execute()){
    echo("Datos insertados de forma correcta");
}else{
    echo("No se pudo insertar los datos error: ".$stmt->error);
}

$stmt->close();
$conn->close();

?>