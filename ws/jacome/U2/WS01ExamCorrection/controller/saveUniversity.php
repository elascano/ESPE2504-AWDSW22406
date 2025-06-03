<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once '../backend/University.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $capacity = $_POST['capacity'];
    $address = $_POST['address'];
    $city = $_POST['city'];

    University::insertUniversity($name, $type, $capacity, $address, $city);

}

?>

