


<?php
$mysqli = new mysqli("localhost", "root", "", "customerdb");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$result = $mysqli->query("SELECT * FROM customers");

echo "<h2>Customer List</h2>";
echo "<a href='Clase.html'>← Back to Registration</a><br><br>";
echo "<table border='1' cellpadding='8'>
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Born Date</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Gender</th>
    <th>id</th>
    <th>Actions</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['indice']}</td>
        <td>{$row['name']}</td>
        <td>{$row['born_date']}</td>
        <td>{$row['email']}</td>
        <td>{$row['phone']}</td>
        <td>{$row['gender']}</td>
        <td>{$row['Id']}</td>
        <td>
            <a href='update.php?indice={$row['indice']}'>Edit</a> |
            <a href='delete.php?indice={$row['indice']}' onclick=\"return confirm('Are you sure you want to delete this customer?');\">Delete</a>
        </td>
    </tr>";
}
echo "</table>";

$mysqli->close();
?>
