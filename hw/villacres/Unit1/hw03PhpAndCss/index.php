<?php
$errors = [];
$totalPrice = 0;
$basePrice = 0;
$author = $comicName = $year = $price = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $author = $_POST['author'];
    $comicName = $_POST['comic_name'];
    $year = $_POST['year'];
    $price = $_POST['price'];

    if (!preg_match("/^[a-zA-Z\s]+$/", $author)) {
        $errors[] = "El nombre del autor debe contener solo letras y espacios.";
    }

    if (!preg_match("/^[a-zA-Z0-9\s]+$/", $comicName)) {
        $errors[] = "El nombre del cómic debe contener solo letras, números y espacios.";
    }

    if (!preg_match("/^[0-9]{4}$/", $year)) {
        $errors[] = "El año de publicación debe ser un número de 4 dígitos.";
    }

    if (!is_numeric($price) || $price <= 0) {
        $errors[] = "El precio debe ser un número positivo.";
    }

    if (count($errors) === 0) {
        $basePrice = $price;
        $iva = 0.15;
        $totalPrice = $price + ($price * $iva);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comic Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Comic Registration</h1>

        <form action="index.php" method="POST">
            <label for="author">Author's Name</label>
            <input type="text" id="author" name="author" value="<?php echo htmlspecialchars($author); ?>" required>

            <label for="comic_name">Comic's Name</label>
            <input type="text" id="comic_name" name="comic_name" value="<?php echo htmlspecialchars($comicName); ?>" required>

            <label for="year">Year of Publication</label>
            <input type="text" id="year" name="year" value="<?php echo htmlspecialchars($year); ?>" required>

            <label for="price">Price ($)</label>
            <input type="text" id="price" name="price" value="<?php echo htmlspecialchars($price); ?>" required>

            <button type="submit">Register Comic</button>
        </form>

        <?php if (count($errors) > 0): ?>
            <div class="errors">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <?php if ($totalPrice > 0): ?>
            <div class="result">
                <h2>Comic Registered Successfully!</h2>
                <p><strong>Author:</strong> <?php echo htmlspecialchars($author); ?></p>
                <p><strong>Comic:</strong> <?php echo htmlspecialchars($comicName); ?></p>
                <p><strong>Year of Publication:</strong> <?php echo htmlspecialchars($year); ?></p>
                <p><strong>Base Price:</strong> $<?php echo number_format($basePrice, 2); ?></p>
                <p><strong>Total Price (including 15% VAT):</strong> $<?php echo number_format($totalPrice, 2); ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
