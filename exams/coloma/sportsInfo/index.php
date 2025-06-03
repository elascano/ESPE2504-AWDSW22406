<?php include 'search.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sports Information</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Sports Information</h1>

    <form method="POST" action="">
        <input type="text" name="search" placeholder="Search for sports..." value="<?php echo htmlspecialchars($searchTerm); ?>">
        <input type="submit" value="Search">
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Players</th>
            <th>Duration (min)</th>
            <th>Popularity</th>
        </tr>
        <?php if (!empty($sports)): ?>
            <?php foreach ($sports as $sport): ?>
                <tr>
                    <td><?= $sport["id"] ?></td>
                    <td><?= $sport["name"] ?></td>
                    <td><?= $sport["type"] ?></td>
                    <td><?= $sport["players"] ?></td>
                    <td><?= $sport["duration"] ?></td>
                    <td><?= $sport["popularity"] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr><td colspan="6">No records found</td></tr>
        <?php endif; ?>
    </table>

    <h2>Average Duration of Sports Events: <?= number_format($averageDuration, 2) ?> minutes</h2>
</body>
</html>
