<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != 'customer') {
    header('Location: login.php');
    exit();
}

include('../db/config.php');

$customer_id = $_SESSION['user_id'];

// Fetch customer details
$sql = "SELECT * FROM users WHERE id='$customer_id'";
$result = $conn->query($sql);
$customer = $result->fetch_assoc();

// Fetch total bookings made by the customer
$sql = "SELECT COUNT(*) AS total_bookings FROM rentals WHERE customer_id='$customer_id'";
$result = $conn->query($sql);
$total_bookings = $result->fetch_assoc()['total_bookings'];

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
     <?php 
       include('../navbar.php');
    ?> 
   
    <div class="container">
        <h2 class="text-center">Customer Dashboard</h2>
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $customer['name']; ?></h5>
                        <p class="card-text">Email: <?php echo $customer['email']; ?></p>
                        <p class="card-text">Total Bookings: <?php echo $total_bookings; ?></p>
                        <a href="available_cars.php" class="btn btn-primary">Available Cars</a>
                        <a href="../api/logout.php" class="btn btn-danger float-right">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>
