<?php
$phone = $_POST['phone'] ?? '';

$phonePattern = '/^(\(0[2-8]\)\s?\d{4}\s?\d{4}|0[2-8]\s?\d{4}\s?\d{4}|04\d{2}\s?\d{3}\s?\d{3}|04\d{8})$/';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Validation Result</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #FEFAE0;
      text-align: center;
      padding: 40px;
    }
    .result {
      display: inline-block;
      padding: 20px;
      border-radius: 10px;
      background-color: #CCD5AE;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .error {
      color: red;
    }
    .success {
      color: green;
    }
  </style>
</head>
<body>
  <div class="result">
    <h2>Validation Result</h2>
    <?php if (preg_match($phonePattern, $phone)): ?>
      <p class="success">✅ Phone number <strong><?= htmlspecialchars($phone) ?></strong> is valid.</p>
    <?php else: ?>
      <p class="error">❌ Phone number <strong><?= htmlspecialchars($phone) ?></strong> is not valid.</p>
    <?php endif; ?>
    <a href="index.html">← Try Again</a>
  </div>
</body>
</html>
