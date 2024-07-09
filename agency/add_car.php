<?php
session_start();
if (!isset($_SESSION['user_type']) || $_SESSION['user_type'] != 'agency') {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Car</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
            max-width: 600px;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 30px;
            color: #343a40;
        }
        .form-group label {
            font-weight: bold;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        @media (max-width: 767px) {
            .container {
                padding: 20px;
            }
            h2 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <?php 
       include('../navbar.php');
    ?>
    <div class="container">
        <h2 class="text-center">Add New Car</h2>
        <form action="../api/add_car.php" method="POST">
            <div class="form-group">
                <label for="model">Vehicle Model:</label>
                <input type="text" class="form-control" id="model" name="model" required>
            </div>
            <div class="form-group">
                <label for="number">Vehicle Number:</label>
                <input type="text" class="form-control" id="number" name="number" required>
            </div>
            <div class="form-group">
                <label for="capacity">Seating Capacity:</label>
                <input type="number" class="form-control" id="capacity" name="capacity" required>
            </div>
            <div class="form-group">
                <label for="rent">Rent per Day:</label>
                <input type="number" class="form-control" id="rent" name="rent" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Add Car</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>
