<?php
include('../db/config.php');
session_start();

if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != 'agency') {
    echo "Unauthorized access";
    exit();
}

$agency_id = $_SESSION['user_id'];

$sql = "SELECT cars.model, cars.number, users.name AS customer_name, rentals.start_date, rentals.days 
        FROM rentals 
        JOIN cars ON rentals.car_id = cars.id 
        JOIN users ON rentals.customer_id = users.id 
        WHERE cars.agency_id = '$agency_id'";
$result = $conn->query($sql);

$booked_cars = [];
while ($row = $result->fetch_assoc()) {
    $booked_cars[] = $row;
}

echo json_encode($booked_cars);

$conn->close();
?>
