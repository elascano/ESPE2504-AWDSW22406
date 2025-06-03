<?php
$type = $_POST['type'] ?? '';
$hours = intval($_POST['hours'] ?? 0);
$quantity = intval($_POST['quantity'] ?? 0);
$extra_hours = intval($_POST['extra_hours'] ?? 0);

$rates = [
  'hd' => 10,
  'fullhd' => 15,
  '4k' => 20,
];

$extra_rate = 5;

if (!array_key_exists($type, $rates)) {
  die("Invalid projector type.");
}

if ($hours <= 0 || $quantity <= 0 || $extra_hours < 0) {
  die("Invalid input values.");
}

$projector_rate = $rates[$type];
$projector_cost = $projector_rate * $hours * $quantity;
$extra_cost = $extra_rate * $extra_hours;
$total_cost = $projector_cost + $extra_cost;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Rental Summary</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f0f4ef;
      padding: 20px;
      text-align: center;
    }
    .summary {
      background-color: #dff0d8;
      display: inline-block;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      max-width: 400px;
    }
    a {
      display: inline-block;
      margin-top: 15px;
      color: #333;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="summary">
    <h2>Rental Summary</h2>
    <p><strong>Projector type:</strong> <?= htmlspecialchars($type) ?></p>
    <p><strong>Rental hours:</strong> <?= $hours ?></p>
    <p><strong>Number of projectors:</strong> <?= $quantity ?></p>
    <p><strong>Extra equipment hours:</strong> <?= $extra_hours ?></p>
    <hr>
    <p><strong>Projector cost:</strong> $<?= number_format($projector_cost, 2) ?></p>
    <p><strong>Extra equipment cost:</strong> $<?= number_format($extra_cost, 2) ?></p>
    <p><strong>Total to pay:</strong> $<?= number_format($total_cost, 2) ?></p>
    <a href="index.html">← Back to form</a>
  </div>
</body>
</html>
