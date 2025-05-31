<?php include("db.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Computer Registration</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600&display=swap" rel="stylesheet">
</head>

</head>
<body>
    <h1>Computer Registration</h1>
    <form action="save_registration.php" method="POST" class="form" autocomplete="off">
        <table>
            <tr>
                <td><label for="txtName">Name:</label></td>
                <td><input type="text" id="txtName" name="txtName" required></td>
            </tr>
            <tr>
                <td><label for="txtMemory">Memory (GB):</label></td>
                <td><input type="text" id="txtMemory" name="txtMemory" required></td>
            </tr>
            <tr>
                <td><label for="txtType">Model Type:</label></td>
                <td>
                    <select id="txtModelType" name="txtModelType" required>
                        <option value="">Select...</option>
                        <option value="Laptop">Laptop</option>
                        <option value="Desk">Desk</option>
                        <option value="Gamer">Gamer</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="txtProcessor">Processor:</label></td>
                <td>
                    <select id="txtProcessor" name="txtProcessor" required>
                        <option value="">Select...</option>
                        <option value="AMD Ryzen">AMD Ryzen</option>
                        <option value="Intel Core">Intel Core</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="txtCoreCount">Number of Cores:</label></td>
                <td><input type="number" id="txtCoreCount" name="txtCoreCount" required></td>
            </tr>
            <tr>
                <td><label for="txtSysOp">Operating System:</label></td>
                <td>
                    <select id="txtSysOp" name="txtSysOp" required>
                        <option value="">Select...</option>
                        <option value="Windows 10">Windows 10</option>
                        <option value="Windows 11">Windows 11</option>
                        <option value="Linux">Linux</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="txtGraphicCard">Graphic Card:</label></td>
                <td>
                    <input type="radio" id="graphicIntegrated" name="txtGraphicCard" value="Integrated" required>
                    <label for="graphicIntegrated">Integrated</label><br>
                    <input type="radio" id="graphicDedicated" name="txtGraphicCard" value="Dedicated">
                    <label for="graphicDedicated">Dedicated</label><br>
                </td>
            </tr>
            <tr>
                <td><label for="txtWarranty">Warranty (years):</label></td>
                <td><input type="number" id="txtWarranty" name="txtWarranty" required></td>
            </tr>
            <tr>
                <td><label for="txtPrice">Price ($):</label></td>
                <td><input type="number" id="txtPrice" name="txtPrice" required></td>
            </tr>
        </table>
        <button type="submit" name="save_registration">Add New</button>
    </form>
</body>
</html>
