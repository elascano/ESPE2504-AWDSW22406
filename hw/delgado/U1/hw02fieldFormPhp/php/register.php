<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once("dbConnection.php");

    $name = htmlspecialchars(trim($_POST["name"]));
    $lastName = htmlspecialchars(trim($_POST["lastName"]));
    $studentId = htmlspecialchars(trim($_POST["studentId"]));
    $password = password_hash(trim($_POST["password"]), PASSWORD_DEFAULT);
    $gender = htmlspecialchars($_POST["gender"]);

    $sql = "INSERT INTO students (name, last_name, student_id, password, gender) 
            VALUES (?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    if ($stmt) {
        $stmt->bind_param("sssss", $name, $lastName, $studentId, $password, $gender);
        if ($stmt->execute()) {
            echo "<h2>Student Registered Successfully</h2>";
            echo "<p>Name: $name $lastName</p>";
            echo "<p>ID: $studentId</p>";
            echo "<p>Gender: $gender</p>";
        } else {
            echo "Error: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Database error: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>
