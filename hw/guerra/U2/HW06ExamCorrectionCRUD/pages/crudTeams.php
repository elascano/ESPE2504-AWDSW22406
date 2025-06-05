<?php
require_once '../models/ConnectionDB.php';

$db = new connectionDB();
$conn = $db->connection();

$result = $conn->query("SELECT * FROM teamGoals ORDER BY teamId");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>CRUD Equipos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/styleCRUD.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Winky+Rough:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar">
            <section class="navbar-left">
                <h1 class="nav-title">Soccer Team Goal Difference Calculator</h1>
            </section>
            <section class="navbar-right">
                <a class="nav-link" href="../index.html">Register</a>
                <a class="nav-link" href="../pages/crudTeams.php">View List</a>
            </section>
        </nav>
    </header>
    <div class="container">
        <table border="1" cellpadding="5" cellspacing="0">
            <thead>
                <tr>
                    <th>Team ID</th>
                    <th>Goals Scored</th>
                    <th>Goals Received</th>
                    <th>Difference</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['teamId']) ?></td>
                    <td><?= $row['goalsScored'] ?></td>
                    <td><?= $row['goalsReceived'] ?></td>
                    <td><?= $row['goalDifference'] ?></td>
                    <td>
                        <a href="../pages/updateTeam.php?teamId=<?= urlencode($row['teamId']) ?>">Edit</a> |
                        <a href="../models/deleteController.php?teamId=<?= urlencode($row['teamId']) ?>" onclick="return confirm('¿Are you sure you want to delete this record?')">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>

        <a class="btn" href="../index.html">Add new record</a>
    </div>
    <footer>
        Developed by: Diana Guerra
    </footer>
</body>
</html>

<?php
$conn->close();
?>