<?php
session_start();
if (!isset($_SESSION['user_id']) || $_SESSION['user_type'] != 'agency') {
    header('Location: login.php');
    exit();
}

include('../db/config.php');

$agency_id = $_SESSION['user_id'];

// Fetch agency details
$sql = "SELECT * FROM users WHERE id='$agency_id'";
$result = $conn->query($sql);
$agency = $result->fetch_assoc();

// Fetch total cars added by the agency
$sql = "SELECT COUNT(*) AS total_cars FROM cars WHERE agency_id='$agency_id'";
$result = $conn->query($sql);
$total_cars = $result->fetch_assoc()['total_cars'];

// Fetch total bookings for the agency's cars
$sql = "SELECT COUNT(*) AS total_bookings FROM rentals 
        JOIN cars ON rentals.car_id = cars.id 
        WHERE cars.agency_id='$agency_id'";
$result = $conn->query($sql);
$total_bookings = $result->fetch_assoc()['total_bookings'];

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agency Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        .card {
            margin-top: 20px;
            border: none;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .card-title {
            font-size: 1.5rem;
            font-weight: 600;
        }
        .btn {
            margin-top: 10px;
            font-size: 1rem;
        }
        .container {
            margin-top: 40px;
        }
        .dashboard-header {
            margin-bottom: 40px;
            font-size: 2rem;
            font-weight: 700;
        }
        @media (max-width: 576px) {
            .card-title {
                font-size: 1.2rem;
            }
            .btn {
                width: 100%;
                margin-top: 5px;
            }
            .dashboard-header {
                font-size: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <?php include('../navbar.php'); ?>
    <div class="container">
        <h2 class="text-center dashboard-header">Agency Dashboard</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 col-sm-12">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title"><?php echo htmlspecialchars($agency['name']); ?></h5>
                        <p class="card-text">Email: <?php echo htmlspecialchars($agency['email']); ?></p>
                        <p class="card-text">Total Cars Added: <?php echo htmlspecialchars($total_cars); ?></p>
                        <p class="card-text">Total Bookings: <?php echo htmlspecialchars($total_bookings); ?></p>
                        <a href="add_car.php" class="btn btn-primary btn-block">Add New Car</a>
                        <a href="view_booked_cars.php" class="btn btn-primary btn-block">View Booked Cars</a>
                        <a href="logout.php" class="btn btn-danger btn-block">Logout</a>
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
