<?php
$servidor = "localhost";
$usuario = "root";
$clave = "";
$bd = "vehiclesdb";

$conexion = mysqli_connect($servidor, $usuario, $clave, $bd);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Registration</title>
    <script>
        function validateForm() {
            const model = document.forms["frmVehicle"]["txtModel"].value;
            const year = document.forms["frmVehicle"]["txtYear"].value;
            const type = document.forms["frmVehicle"]["txtType"].value;
            const radios = document.forms["frmVehicle"]["txtRadio"];
            const file = document.forms["frmVehicle"]["txtPhoto"].value;

            const regexModel = /^[A-Za-z0-9\s\-]{2,30}$/;
            const currentYear = new Date().getFullYear();

            if (!regexModel.test(model)) {
                alert("Invalid model. Only letters, numbers and hyphens allowed.");
                return false;
            }

            if (!year || new Date(year).getFullYear() > currentYear) {
                alert("Please enter a valid fabrication year.");
                return false;
            }

            if (!type) {
                alert("Please select a vehicle type.");
                return false;
            }

            let radioChecked = false;
            for (let i = 0; i < radios.length; i++) {
                if (radios[i].checked) {
                    radioChecked = true;
                    break;
                }
            }
            if (!radioChecked) {
                alert("Please select if it is an electric vehicle.");
                return false;
            }

            if (!file) {
                alert("Please select an image file.");
                return false;
            }

            if (file && !(/\.(jpg|jpeg|png|gif)$/i).test(file)) {
                alert("Only image files (JPG, PNG, GIF) are allowed.");
                return false;
            }

            return true;
        }
    </script>
</head>
<body>
    <h1>VEHICLES REGISTRATION</h1>
    <hr size="3">
    <form name="frmVehicle" action="insert.php" method="post" enctype="multipart/form-data" onsubmit="return validateForm()">
        <table>
            <tr>
                <td>Model:</td>
                <td><input type="text" name="txtModel" required></td>
            </tr>
            <tr>
                <td>Fabrication year:</td>
                <td><input type="date" name="txtYear" required></td>
            </tr>
            <tr>
                <td>Vehicle type:</td>
                <td>
                    <select name="txtType" required>
                        <option value="">Select</option>
                        <option value="sedan">Sedán</option>
                        <option value="suv">SUV</option>
                        <option value="camioneta">Camioneta</option>
                        <option value="moto">Motocicleta</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Is it electric vehicle?</td>
                <td>
                    <input type="radio" name="txtRadio" value="Yes" required> Yes <br>
                    <input type="radio" name="txtRadio" value="No" required> No <br>
                </td>
            </tr>
            <tr>
                <td>Image file of vehicle:</td>
                <td><input type="file" name="txtPhoto" accept="image/*"></td>
            </tr>
            <tr>
                <td>Send</td>
                <td><input type="submit" name="btnSubmit" value="Register"></td>
            </tr>
        </table>
    </form>
    <hr>
<h2>Vehículos registrados</h2>

<?php
// Conexión (asegúrate de que ya exista, si no, vuelve a conectar aquí)
$conexion = mysqli_connect("localhost", "root", "", "vehiclesdb");
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

$sql = "SELECT model, fabrication_year, vehicle_type, is_electric, image_path FROM vehicles";
$resultado = mysqli_query($conexion, $sql);

if (mysqli_num_rows($resultado) > 0): ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Modelo</th>
            <th>Año</th>
            <th>Tipo</th>
            <th>¿Eléctrico?</th>
            <th>Imagen</th>
        </tr>
        <?php while ($fila = mysqli_fetch_assoc($resultado)): ?>
        <tr>
            <td><?= htmlspecialchars($fila['model']) ?></td>
            <td><?= htmlspecialchars($fila['fabrication_year']) ?></td>
            <td><?= htmlspecialchars($fila['vehicle_type']) ?></td>
            <td><?= htmlspecialchars($fila['is_electric']) ?></td>
            <td>
                <?php if (!empty($fila['image_path'])): ?>
                    <img src="<?= htmlspecialchars($fila['image_path']) ?>" width="100">
                <?php else: ?>
                    Sin imagen
                <?php endif; ?>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
<?php else: ?>
    <p>No hay vehículos registrados aún.</p>
<?php endif;

mysqli_close($conexion);
?>

    <hr size="3">
    <br>
    This is the web page for registering vehicles. <br>
    Please fill all the fields.<br>
    Remember to <strong>save</strong> the information at the end of your process. <br>
</body>
</html>
