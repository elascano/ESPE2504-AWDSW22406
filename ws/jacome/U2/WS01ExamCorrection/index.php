<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header>
        <h1>University Portal</h1>
    </header>

    <nav>
        <a href="index.php">Home</a>
        <a href="pages/register.php">Register University</a>
        <a href="pages/showUniversity.php">Show All Universities</a>
    </nav>

    <h1 style="text-align: center;">University University</h1>
    <hr size="10">
    <form name="frmUniversity" action="pages/findUniversity.php" method="post">
        <table style="justify-self: center;">
            <tr>
                <td>Id University:</td>
                <td><input type="text" name="txtId" id="txtId"></td>
            </tr>
            <input type="submit" value="Access">
        </table>
    </form>
</body>
</html>