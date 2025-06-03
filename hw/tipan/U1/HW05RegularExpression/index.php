<?php
$isSubmitted = $_SERVER["REQUEST_METHOD"] === "POST";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Computer Registration</title>
  <link rel="stylesheet" href="./stly.css">
</head>
<body>
<?php if (!$isSubmitted): ?>
  <form method="POST" novalidate>
    <h2>Computer Registration</h2>
    <div class="grid">
      <div>
        <label for="brand">Brand</label>
        <input type="text" name="brand" id="brand" required placeholder="e.g. Dell" />
      </div>
      <div>
        <label for="model">Model</label>
        <input type="text" name="model" id="model" required placeholder="e.g. XPS 13" />
      </div>
      <div>
        <label>Type</label>
        <div class="radio-group">
          <label><input type="radio" name="type" value="Desktop" required /> Desktop</label>
          <label><input type="radio" name="type" value="Laptop" /> Laptop</label>
        </div>
      </div>
      <div>
        <label for="processor">Processor</label>
        <select name="processor" id="processor" required>
          <option value="" disabled selected>-- Select --</option>
          <option value="Intel i5">Intel i5</option>
          <option value="Intel i7">Intel i7</option>
          <option value="AMD Ryzen 5">AMD Ryzen 5</option>
          <option value="AMD Ryzen 7">AMD Ryzen 7</option>
        </select>
      </div>
      <div>
        <label for="ram">RAM (GB)</label>
        <input type="number" name="ram" id="ram" min="4" step="4" required placeholder="8, 16, 32..." />
      </div>
      <div>
        <label for="storage">Storage</label>
        <div class="range-container">
          <input type="range" name="storage" id="storage" min="128" max="2048" step="128" value="512" oninput="document.getElementById('storageVal').textContent=this.value" />
          <span id="storageVal">512</span> GB
        </div>
      </div>
      <div>
        <label>Dedicated GPU</label>
        <div class="checkbox-group">
          <label><input type="checkbox" name="graphics" value="Yes" /> Yes</label>
        </div>
      </div>
      <div>
        <label for="os">Operating System</label>
        <select name="os" id="os" required>
          <option value="" disabled selected>-- Select --</option>
          <option value="Windows">Windows</option>
          <option value="macOS">macOS</option>
          <option value="Linux">Linux</option>
        </select>
      </div>
      <div>
        <label for="purchase_date">Purchase Date</label>
        <input type="date" name="purchase_date" id="purchase_date" required />
      </div>
      <div class="row-span-3">
        <label for="comments">Comments</label>
        <textarea name="comments" id="comments" rows="2" placeholder="Optional notes..."></textarea>
      </div>
      <button type="submit">Save Computer Info</button>
    </div>
  </form>
<?php else: ?>
  <div class="result">
    <h3>Computer Info Saved</h3>
    <p><strong>Brand:</strong> <?= htmlspecialchars($_POST['brand']) ?></p>
    <p><strong>Model:</strong> <?= htmlspecialchars($_POST['model']) ?></p>
    <p><strong>Type:</strong> <?= htmlspecialchars($_POST['type']) ?></p>
    <p><strong>Processor:</strong> <?= htmlspecialchars($_POST['processor']) ?></p>
    <p><strong>RAM:</strong> <?= htmlspecialchars($_POST['ram']) ?> GB</p>
    <p><strong>Storage:</strong> <?= htmlspecialchars($_POST['storage']) ?> GB</p>
    <p><strong>Dedicated GPU:</strong> <?= isset($_POST['graphics']) ? "Yes" : "No" ?></p>
    <p><strong>Operating System:</strong> <?= htmlspecialchars($_POST['os']) ?></p>
    <p><strong>Purchase Date:</strong> <?= htmlspecialchars($_POST['purchase_date']) ?></p>
    <p><strong>Comments:</strong> <?= nl2br(htmlspecialchars($_POST['comments'])) ?></p>
    <a href="computer_form.php">← Register Another Computer</a>
  </div>
<?php endif; ?>
</body>
</html>
