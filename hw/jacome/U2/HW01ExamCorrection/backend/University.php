<?php
require_once 'ConnectionDB.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class University {

    public static function getUniversity($Id) {
        $database = new ConnectionDB();
        $conn = $database->connection();

        $query = "SELECT * FROM University WHERE idUniversity = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "i", $Id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $row = mysqli_fetch_assoc($result);
        return $row;
    }

    public static function insertUniversity($name, $type, $capacity, $address, $city){
        $database = new ConnectionDB();
        $conn = $database->connection();

        $query = "INSERT INTO University (name, type, capacity, address, city) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("ssiss", $name, $type, $capacity, $address, $city);
        if ($stmt->execute()) {
            echo "<h1>University Registered Successfully!</h1>";
            echo "<p><a href='../index.php'>Go Back</a></p>";
        } else {
            echo "<h1>Error Registering University</h1>";
        }
        $stmt->close();
        $conn->close();
    }

    public static function getAllUniversities() {
        $database = new ConnectionDB();
        $conn = $database->connection();

        $query = "SELECT * FROM University";
        $result = mysqli_query($conn, $query);

        $universities = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $universities[] = $row;
        }

        mysqli_free_result($result);
        $conn->close();

        return $universities;
    }
}
?>
