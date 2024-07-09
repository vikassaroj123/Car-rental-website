<?php
include('../db/config.php');
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != 'agency') {
    echo "Unauthorized access";
    exit();
}

$model = $_POST['model'];
$number = $_POST['number'];
$capacity = $_POST['capacity'];
$rent = $_POST['rent'];
$agency_id = $_SESSION['user_id'];

$sql = "INSERT INTO cars (model, number, capacity, rent, agency_id) VALUES ('$model', '$number', '$capacity', '$rent', '$agency_id')";

if ($conn->query($sql) === TRUE) {
    echo "Car added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
