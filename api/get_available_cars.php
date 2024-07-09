<?php
include('../db/config.php');
session_start();

$sql = "SELECT * FROM cars";
$result = $conn->query($sql);

$cars = [];
while ($row = $result->fetch_assoc()) {
    $row['logged_in'] = isset($_SESSION['user_id']) && $_SESSION['user_type'] == 'customer';
    $cars[] = $row;
}

echo json_encode($cars);

$conn->close();
?>
