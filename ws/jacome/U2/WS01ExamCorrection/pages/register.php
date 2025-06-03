<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register University</title>
</head>

<body>
    <?php include("header.php") ?>
    <h1 style="text-align: center;">Register New University</h1>
    <hr size="10">
    <form action="../controller/saveUniversity.php" method="POST">
        <table style="margin: auto;">
            <tr>
                <td>University Name:</td>
                <td><input type="text" name="name" id="name" required></td>
            </tr>
            <tr>
                <td>University Type:</td>
                <td><input type="text" name="type" id="type" required></td>
            </tr>
            <tr>
                <td>University Capacity:</td>
                <td><input type="number" name="capacity" id="capacity" required></td>
            </tr>
            <tr>
                <td>University Address:</td>
                <td><input type="text" name="address" id="address" required></td>
            </tr>
            <tr>
                <td>University City:</td>
                <td><input type="text" name="city" id="city" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" value="Register University">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>