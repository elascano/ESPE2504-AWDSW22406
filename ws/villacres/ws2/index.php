<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Bus Registration</h1>
    <form action="save_registration.php" class="form" method="POST">
        <table>
            <tr>
                <td>License Plate:</td>
                <td><input type="text" name="txtId" required></td>
            </tr>
            <tr>
                <td>Driver:</td>
                <td><input type="text" name="txtName" required></td>
            </tr>
            <tr>
                <td>Id Driver:</td>
                <td><input type="password" name="txtPassword" required></td>
            </tr>
            <tr>
                <td>Vehicle Year:</td>
                <td><input type="number" name="txtVehicleYear" min="2010" max="2024" step="1" required></td>
            </tr>
            <tr>
                <td>Cooperative:</td>
                <td>
                    <input type="radio" name="Coperativa" value="Quitumbe" required> Quitumbe<br>
                    <input type="radio" name="Coperativa" value="San Cristobal"> San Cristobal<br>
                    <input type="radio" name="Coperativa" value="Transplaneta"> Transplaneta
                </td>
            </tr>
            <tr>
                <td>Start of route:</td>
                <td>
                    <select name="txtStartRoute" required>
                        <option value="">Select...</option>
                        <option value="Quitumbe Bus Terminal">Quitumbe Bus Terminal</option>
                        <option value="Station of TroleBus C C Recreo">Station of TroleBus C C Recreo</option>
                        <option value="Calderon">Calderon</option>
                    </select>
                </td>
            </tr>
        </table>
        <button type="submit" name="save_registration">Add New</button>
    </form>
</body>
</html>

