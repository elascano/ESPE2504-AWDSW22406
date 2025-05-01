<?php
$brand = $_POST['brand'];
$model = $_POST['model'];
$processor = $_POST['processor'];
$ram = $_POST['ram'];
$storage = $_POST['storage'];
$gpu = $_POST['gpu'];
$os = $_POST['os'];
$color = $_POST['color'];
$price = $_POST['price'];
$release_year = $_POST['release_year'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Computer Info</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-xl">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Computer Information</h1>
        <ul class="space-y-2 text-gray-700">
            <li><strong>Brand:</strong> <?= $brand ?></li>
            <li><strong>Model:</strong> <?= $model ?></li>
            <li><strong>Processor:</strong> <?= $processor ?></li>
            <li><strong>RAM:</strong> <?= $ram ?></li>
            <li><strong>Storage:</strong> <?= $storage ?></li>
            <li><strong>Graphics Card:</strong> <?= $gpu ?></li>
            <li><strong>Operating System:</strong> <?= $os ?></li>
            <li><strong>Color:</strong> <?= $color ?></li>
            <li><strong>Price:</strong> $<?= $price ?></li>
            <li><strong>Release Year:</strong> <?= $release_year ?></li>
        </ul>
    </div>
</body>
</html>
