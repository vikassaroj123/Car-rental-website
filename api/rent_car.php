<?php
include('../db/config.php');
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != 'customer') {
    echo "Unauthorized access";
    exit();
}

$car_id = $_POST['car_id'];
$days = $_POST['days'];
$start_date = $_POST['start_date'];
$customer_id = $_SESSION['user_id'];

$sql = "INSERT INTO rentals (car_id, customer_id, days, start_date) VALUES ('$car_id', '$customer_id', '$days', '$start_date')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
