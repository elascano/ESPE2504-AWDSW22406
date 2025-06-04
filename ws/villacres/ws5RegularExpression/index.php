<?php
$errors = [];
$isAdult = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $dob = $_POST['dob'];

    if (empty($name)) {
        $errors[] = "Name is required.";
    }

    if (empty($dob)) {
        $errors[] = "Date of birth is required.";
    } else {
        $birthDate = new DateTime($dob);
        $currentDate = new DateTime();
        $age = $currentDate->diff($birthDate)->y; 
        if ($age >= 18) {
            $isAdult = true;
        } else {
            $isAdult = false;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Check Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Age Verification</h1>

        <form action="index.php" method="POST">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>" required>

            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" value="<?php echo isset($dob) ? htmlspecialchars($dob) : ''; ?>" required>

            <button type="submit">Submit</button>
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

        <?php if ($isAdult !== null): ?>
            <div class="result">
                <h2>Result:</h2>
                <?php if ($isAdult): ?>
                    <p><?php echo htmlspecialchars($name); ?> is legally an adult!</p>
                <?php else: ?>
                    <p><?php echo htmlspecialchars($name); ?> is a minor.</p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
