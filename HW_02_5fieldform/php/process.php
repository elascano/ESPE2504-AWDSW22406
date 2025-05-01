<?php
require_once 'db_connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $id = $_POST['id'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sex = $_POST['sex'];
    try {
        $sql = "INSERT INTO students (name, lastname, id, password, sex) 
                VALUES (:name, :lastname, :id, :password, :sex)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':lastname', $lastname);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':sex', $sex);
        $stmt->execute();
        echo "Student registered successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>