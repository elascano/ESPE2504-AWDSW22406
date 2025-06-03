<?php
require_once '../backend/University.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$universities = University::getAllUniversities();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Universities</title>
</head>
<body>

    <?php include("header.php") ?>

    <h1>Show Universities</h1>
    <?php if (count($universities) > 0): ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Capacity</th>
                    <th>Address</th>
                    <th>City</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($universities as $university): ?>
                    <tr>
                        <td><?php echo $university['idUniversity']; ?></td>
                        <td><?php echo $university['name']; ?></td>
                        <td><?php echo $university['type']; ?></td>
                        <td><?php echo $university['capacity']; ?></td>
                        <td><?php echo $university['address']; ?></td>
                        <td><?php echo $university['city']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No universities found.</p>
    <?php endif; ?>

</body>
</html>
