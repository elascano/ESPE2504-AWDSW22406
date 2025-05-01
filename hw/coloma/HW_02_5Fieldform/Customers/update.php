<?php
$mysqli = new mysqli("localhost", "root", "", "customerdb");

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["indice"])) {
    $indice = $_GET["indice"];
    $result = $mysqli->query("SELECT * FROM customers WHERE indice='$indice'");
    $data = $result->fetch_assoc();
?>
<form method="POST" action="update.php">
    <input type="hidden" name="customerID" value="<?php echo $data['Id']; ?>">
    Name: <input type="text" name="customerName" value="<?php echo $data['name']; ?>"><br>
    Born Date: <input type="date" name="bornDate" value="<?php echo $data['born_date']; ?>"><br>
    Email: <input type="email" name="customerEmail" value="<?php echo $data['email']; ?>"><br>
    Phone: <input type="text" name="customerPhone" value="<?php echo $data['phone']; ?>"><br>
    Gender: 
    <select name="customerGender">
        <option value="male" <?php if($data['gender']=='male') echo "selected"; ?>>Male</option>
        <option value="female" <?php if($data['gender']=='female') echo "selected"; ?>>Female</option>
        <option value="other" <?php if($data['gender']=='other') echo "selected"; ?>>Other</option>
    </select><br>
    <input type="submit" value="Update">
</form>
<?php
}
elseif ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST["customerID"];
    $name = $_POST["customerName"];
    $born = $_POST["bornDate"];
    $email = $_POST["customerEmail"];
    $phone = $_POST["customerPhone"];
    $gender = $_POST["customerGender"];

    $stmt = $mysqli->prepare("UPDATE customers SET name=?, born_date=?, email=?, phone=?, gender=? WHERE Id=?");
    $stmt->bind_param("ssssss", $name, $born, $email, $phone, $gender, $id);
    $stmt->execute();
    echo "Customer updated. <a href='read.php'>Back to list</a>";
}
$mysqli->close();
?>
