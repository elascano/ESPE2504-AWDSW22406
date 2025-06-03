<?php
require_once '../models/updateController.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Team<?= htmlspecialchars($teamId) ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Winky+Rough:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../CSS/styleUpdate.css" />
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
    
    <section class="container"><br><br>
        <h1>Edit Team <?= htmlspecialchars($teamId) ?></h1><br><br>
        <form name="registerform" id="registerform" method="POST" action="">
            <section class="element">
                <label for="received">Goals Received</label>
                <input type="number" name="received" id="received" value="<?= htmlspecialchars($row['goalsReceived']) ?>" placeholder="Enter goals received" required />
                <div class="notification" id="messageReceived"></div>
            </section>

            <section class="element">
                <label for="scored">Goals Scored</label>
                <input type="number" name="scored" id="scored" value="<?= htmlspecialchars($row['goalsScored']) ?>" placeholder="Enter goals scored" required />
                <div class="notification" id="messageScored"></div>
            </section>

            <section>
                <div class="msg" id="difference"></div>
            </section>

            <section class="btn">
                <input type="submit" name="Register" id="Register" value="Register">
            </section>
            <a class="back" href="../pages/crudTeams.php">Go back to the List</a>
        </form>
    </section>

    <section id="view_values"></section>
    
    <footer>
        Developed by: Diana Guerra
    </footer>

    <script src="../JS/validateUpdate.js"></script>
</body>
</html>
