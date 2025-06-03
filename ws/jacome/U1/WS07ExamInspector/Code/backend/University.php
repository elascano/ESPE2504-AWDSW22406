<?php
require_once 'ConnectionDB.php';

class University {

    public static function getUniversities($Id) {
        $database = new ConnectionDB();
        $conn = $database->connection();

        $query = "SELECT * FROM University WHERE idUniversity = ?";
        $stmt = mysqli_prepare($conn, $query);
        mysqli_stmt_bind_param($stmt, "i", $Id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        $universities = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $universities[] = $row;
        }
        return $universities;
    }

}
?>
