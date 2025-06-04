<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Received Data</title>
  <link rel="stylesheet" href="../css/datos.css">
</head>
<body>
  <h2>Received Phone Data:</h2>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<p><strong>Brand:</strong> " . htmlspecialchars($_POST["brand"]) . "</p>";
    echo "<p><strong>Model:</strong> " . htmlspecialchars($_POST["model"]) . "</p>";
    echo "<p><strong>Operating System:</strong> " . htmlspecialchars($_POST["os"]) . "</p>";
    echo "<p><strong>Storage:</strong> " . htmlspecialchars($_POST["storage"]) . " GB</p>";
    echo "<p><strong>RAM:</strong> " . htmlspecialchars($_POST["ram"]) . "</p>";
    echo "<p><strong>Release Date:</strong> " . htmlspecialchars($_POST["release_date"]) . "</p>";

    echo "<p><strong>Available Colors:</strong> ";
    if (!empty($_POST["color"])) {
      echo implode(", ", array_map('htmlspecialchars', $_POST["color"]));
    } else {
      echo "None selected";
    }
    echo "</p>";

    echo "<p><strong>Price:</strong> $" . htmlspecialchars($_POST["price"]) . "</p>";
    echo "<p><strong>Availability:</strong> " . htmlspecialchars($_POST["availability"]) . "</p>";
    echo "<p><strong>Description:</strong> " . nl2br(htmlspecialchars($_POST["description"])) . "</p>";

    // Show uploaded file name
    if (isset($_FILES["photo"]) && $_FILES["photo"]["error"] === UPLOAD_ERR_OK) {
      echo "<p><strong>Uploaded Image:</strong> " . htmlspecialchars($_FILES["photo"]["name"]) . "</p>";
    } else {
      echo "<p><strong>Uploaded Image:</strong> None</p>";
    }
  } else {
    echo "<p>No data received.</p>";
  }
  ?>

</body>
</html>
