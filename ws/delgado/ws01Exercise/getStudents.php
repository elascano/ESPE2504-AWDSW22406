<?php
include("/db_connection.php");

$studentId = $_POST['student_id'] ?? null;
$studentData = "";

if ($studentId) {
    $stmt = $conn->prepare("SELECT * FROM students WHERE id = ?");
    $stmt->bind_param("i", $studentId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $information = $result->fetch_assoc()) {
        $studentData .= "
            <tr>
                <td>" . htmlspecialchars($information['name']) . "</td>
                <td>" . htmlspecialchars($information['class']) . "</td>
                <td>" . htmlspecialchars($information['grade_unit1']) . "</td>
                <td>" . htmlspecialchars($information['grade_unit2']) . "</td>
                <td>" . htmlspecialchars($information['grade_unit3']) . "</td>
                <td>" . htmlspecialchars($information['final_grade']) . "</td>
                <td>
                    <a href='edit_student.php?id=" . urlencode($information['id']) . "'>Editar</a>
                </td>
                <td>
                    <a href='delete_student.php?id=" . urlencode($information['id']) . "'>Borrar</a>
                </td>
            </tr>
        ";
    } else {
        $studentData = "<tr><td colspan='7'>Estudiante no encontrado.</td></tr>";
    }

    $stmt->close();
} else {
    echo("No se proporciono infro")
}
?>