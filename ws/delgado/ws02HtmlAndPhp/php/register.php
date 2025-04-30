<?php
require 'conection.php';

$model = $_POST['txtModel'];
$brand = $_POST['txtBrand'];
$price = $_POST['nmbPrice'];
$amount = $_POST['nmbAmount'];
$acquisitionDate = $_POST['dtAcquisition'];
$state = $_POST['selState'];
$observations = $_POST['txtObservations'];
$provider = $_POST['txtProvider'];
$salePrice = $_POST['nmbSalePrice'];

$sql = "INSERT INTO computers (model, brand, price, amount, acquisitionDate, state, observations, provider, salePrice) 
        VALUES (:model, :brand, :price, :amount, :acquisitionDate, :state, :observations, :provider, :salePrice)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':model', $model);
$stmt->bindParam(':brand', $brand);
$stmt->bindParam(':price', $price);
$stmt->bindParam(':amount', $amount);
$stmt->bindParam(':acquisitionDate', $acquisitionDate);
$stmt->bindParam(':state', $state);
$stmt->bindParam(':observations', $observations);
$stmt->bindParam(':provider', $provider);
$stmt->bindParam(':salePrice', $salePrice);

$stmt->execute();
echo "Computer registered";
?>