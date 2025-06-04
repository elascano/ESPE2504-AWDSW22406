<?php
include("conexion.php");

$departamento = isset($_GET['departamento']) ? $_GET['departamento'] : '';
$sql = "SELECT * FROM profesores";
if (!empty($departamento)) {
    $sql .= " WHERE departamento = '" . $conn->real_escape_string($departamento) . "'";
}

$result = $conn->query($sql);

echo "<table border='1'>";
echo "<tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Department</th>
        <th>Experience (Years)</th>
        <th>Base Salary</th>
        <th>Publications</th>
        <th>Total Salary</th>
        <th>Update</th>
      </tr>";

while ($row = $result->fetch_assoc()) {
    $salario_total = $row["salario_base"] + ($row["nro_publicaciones"] * 100) + ($row["años_experiencia"] * 50);
    echo "<tr>
        <td>{$row['id']}</td>
        <td contenteditable='true' data-campo='nombre' data-id='{$row['id']}'>{$row['nombre']}</td>
        <td contenteditable='true' data-campo='apellido' data-id='{$row['id']}'>{$row['apellido']}</td>
        <td contenteditable='true' data-campo='departamento' data-id='{$row['id']}'>{$row['departamento']}</td>
        <td contenteditable='true' data-campo='años_experiencia' data-id='{$row['id']}'>{$row['años_experiencia']}</td>
        <td contenteditable='true' data-campo='salario_base' data-id='{$row['id']}'>{$row['salario_base']}</td>
        <td contenteditable='true' data-campo='nro_publicaciones' data-id='{$row['id']}'>{$row['nro_publicaciones']}</td>
        <td>\${$salario_total}</td>
        <td><button onclick='guardarCambios({$row["id"]})'>Save</button></td>
    </tr>";
}
echo "</table>";
$conn->close();
?>
