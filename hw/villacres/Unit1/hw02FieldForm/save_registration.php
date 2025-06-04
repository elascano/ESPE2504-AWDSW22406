<?php
include('db.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['txtName'];
    $memory = $_POST['txtMemory'];
    $modelType = $_POST['txtModelType'];
    $processor = $_POST['txtProcessor'];
    $coreCount = $_POST['txtCoreCount'];
    $operatingSystem = $_POST['txtSysOp'];
    $graphicCard = $_POST['txtGraphicCard'];
    $warranty = $_POST['txtWarranty'];
    $price = $_POST['txtPrice'];

    $stmt = $conn->prepare("INSERT INTO computer_registration (name, memory, model_type, processor, core_count, operating_system, graphic_card, warranty, price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param("ssssissid", $name, $memory, $modelType, $processor, $coreCount, $operatingSystem, $graphicCard, $warranty, $price);

    if ($stmt->execute()) {
        echo "Registración exitosa chavalin!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
