<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cell phones</title>
    <link rel="stylesheet" href="style/style.css">

</head>
<body>
    <h1>Cell phones</h1>

    <form method="post" action="php/find.php">
        <label for="phones">Choose a cell phone:</label>
        <select id="phones" name="phones">
            <option value="Apple">iPhone</option>
            <option value="Samsung">Samsung</option>
            <option value="Xiaomi">Xiaomi</option>
            <option value="Motorola">Motorola</option>
            <option value="OnePlus">OnePlus</option>
        </select>
        <input type="submit" value="Show phones">
    </form>
    <script src="../js/total_of_cellphones.js"></script>

</body>
</html>


