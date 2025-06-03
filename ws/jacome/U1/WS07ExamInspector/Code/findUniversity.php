<?php

include_once "backend/University.php";
$universities = University::getUniversities(_POST("txtId"))

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;">University University</h1>
    <hr size="10">
    <table style="justify-self: center;">
        <tr>
            <td>Name University:</td>
            <td><?php $universities["name"]?></td>
        </tr>
        <tr>
            <td>Type University:</td>
            <td><?php $universities["type"]?></td>
        </tr>
        <tr>
            <td>Capacity University:</td>
            <td><?php $universities["capacity"]?></td>
        </tr>
        <tr>
            <td>Adrress University:</td>
            <td><?php $universities["adrress"]?></td>
        </tr>
        <tr>
            <td>City University:</td>
            <td><?php $universities["city"]?></td>
        </tr>
    </table>

</body>
</html>