<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>TRUCKS</title>
</head>

<body>
    <main>
        <h1>
            Trucks Washer
        </h1>
       <form action="data.php" method="POST" class="truckForm">
    <span>Carga útil</span>
    <div class="inputSqueares">
        <div>
            <div class="infoInput">
                <label for="">BRAND</label>
                <input type="text" name="brand" required>
            </div>
            <div class="infoInput">
                <label for="">MODEL</label>
                <input type="text" name="model" required>
            </div>
            <div class="infoInput">
                <label for="">YEAR</label>
                <input type="number" name="year" required>
            </div>
        </div>
        <div>
            <div class="infoInput">
                <label for="">COLOR</label>
                <input type="text" name="color" required>
            </div>
            <div class="infoInput">
                <label for="">MMA</label>
                <input type="number" step="0.01" name="mma" required>
            </div>
            <div class="infoInput">
                <label for="">TARA</label>
                <input type="number" step="0.01" name="tara" required>
            </div>
        </div>
    </div>
    <button type="submit">Send Data</button>
</form>
    </main>
</body>

</html>