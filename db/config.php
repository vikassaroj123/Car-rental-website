<?php
$servername = "	sql211.infinityfree.com"; 
$username = "if0_36868309";
$password = "rJpMHX40jjU";
$dbname = "if0_36868309_car_rental";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
