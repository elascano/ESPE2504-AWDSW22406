<?php 
include 'db.php';
$searchTerm = isset($_POST['search']) ? $_POST['search'] : '';
$sql = "SELECT * FROM sports WHERE name LIKE ?";
$stmt = $conn->prepare($sql);
$likeTerm = "%" . $searchTerm . "%";
$stmt->bind_param("s", $likeTerm);
$stmt->execute();
$result = $stmt->get_result();
$totalDuration = 0;
$count = 0;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sports Information</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Sports Information</h1>

    <form method="POST" action="">
        <input type="text" name="search" placeholder="Search for sports..." value="<?php echo htmlspecialchars($searchTerm); ?>">
        <input type="submit" value="Search">
    </form>

    <p><a href="create.php">➕ Add New Sport</a></p>

    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Type</th><th>Players</th><th>Duration</th><th>Popularity</th><th>Actions</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>{$row['id']}</td><td>{$row['name']}</td><td>{$row['type']}</td><td>{$row['players']}</td><td>{$row['duration']}</td><td>{$row['popularity']}</td>";
                echo "<td><a href='edit.php?id={$row['id']}'>Edit</a> | <a href='delete.php?id={$row['id']}' onclick=\"return confirm('Are you sure?')\">Delete</a></td>";
                echo "</tr>";
                $totalDuration += $row["duration"];
                $count++;
            }
        } else {
            echo "<tr><td colspan='7'>No records found</td></tr>";
        }
        ?>
    </table>

    <h2>Average Duration: <?php echo $count > 0 ? number_format($totalDuration / $count, 2) : 0; ?> minutes</h2>

    <?php $stmt->close(); $conn->close(); ?>
</body>
</html>