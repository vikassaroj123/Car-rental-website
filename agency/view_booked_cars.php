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
    <title>View Booked Cars</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }
        .container {
            margin-top: 50px;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }
        h2 {
            margin-bottom: 30px;
            color: #343a40;
            font-weight: 700;
        }
        .card {
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border: none;
            border-radius: 10px;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.2);
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #007bff;
        }
        .card-text {
            font-size: 1rem;
            color: #6c757d;
        }
        .badge {
            font-size: 0.9rem;
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            display: inline-block;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php include('../navbar.php'); ?>
    <div class="container">
        <h2 class="text-center">Booked Cars</h2>
        <div id="booked-cars-list" class="row"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            $.ajax({
                url: '../api/view_booked_cars.php',
                method: 'GET',
                success: function(response) {
                    const cars = JSON.parse(response);
                    let carsList = '';
                    cars.forEach(car => {
                        carsList += `
                            <div class="col-md-6 col-lg-4">
                                <div class="card">
                                    <div class="card-body">
                                        <span class="badge">Booked</span>
                                        <h5 class="card-title">${car.model}</h5>
                                        <p class="card-text">Vehicle Number: ${car.number}</p>
                                        <p class="card-text">Booked By: ${car.customer_name}</p>
                                        <p class="card-text">Start Date: ${car.start_date}</p>
                                        <p class="card-text">Days: ${car.days}</p>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                    $('#booked-cars-list').html(carsList);
                }
            });
        });
    </script>
</body>
</html>
