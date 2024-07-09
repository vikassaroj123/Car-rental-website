<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Available Cars</title>
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
        }
        h2 {
            margin-bottom: 30px;
            color: #343a40;
            text-align: center;
        }
        .card {
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .card:hover {
            transform: scale(1.02);
        }
        .card-body {
            padding: 20px;
        }
        .form-control[disabled], .btn[disabled] {
            opacity: 0.7;
            cursor: not-allowed;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
            color: #007bff;
        }
        .card-text {
            font-size: 1rem;
            color: #495057;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.2s;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <?php 
       include('../navbar.php');
    ?>
    <div class="container">
        <h2>Available Cars</h2>
        <div id="cars-list" class="row"></div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            function fetchCars() {
                $.ajax({
                    url: '../api/get_available_cars.php',
                    method: 'GET',
                    success: function(response) {
                        try {
                            const cars = JSON.parse(response);
                            renderCars(cars);
                        } catch (e) {
                            console.error('Error parsing response:', e);
                            alert('Failed to load cars. Please try again later.');
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('AJAX Error:', status, error);
                        alert('Failed to load cars. Please check your connection.');
                    }
                });
            }

            function renderCars(cars) {
                let carsList = '';
                cars.forEach(car => {
                    carsList += `
                        <div class="col-md-6 col-lg-4">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">${car.model}</h5>
                                    <p class="card-text">Vehicle Number: ${car.number}</p>
                                    <p class="card-text">Seating Capacity: ${car.capacity}</p>
                                    <p class="card-text">Rent per Day: $${car.rent}</p>
                                    <label for="days-${car.id}">Number of Days:</label>
                                    <select class="form-control" id="days-${car.id}" ${car.logged_in ? '' : 'disabled'}>
                                        ${Array.from({ length: 30 }, (_, i) => `<option value="${i + 1}">${i + 1}</option>`).join('')}
                                    </select>
                                    <label for="start-date-${car.id}">Start Date:</label>
                                    <input type="date" class="form-control" id="start-date-${car.id}" ${car.logged_in ? '' : 'disabled'}>
                                    <button class="btn btn-primary mt-2 rent-car" data-id="${car.id}" ${car.logged_in ? '' : 'disabled'}>Rent Car</button>
                                </div>
                            </div>
                        </div>
                    `;
                });
                $('#cars-list').html(carsList);
            }

            $(document).on('click', '.rent-car', function() {
                const carId = $(this).data('id');
                const days = $(`#days-${carId}`).val();
                const startDate = $(`#start-date-${carId}`).val();

                console.log('Car ID:', carId);
                console.log('Number of Days:', days);
                console.log('Start Date:', startDate);

                if (!days || !startDate) {
                    alert('Please fill in all fields');
                    return;
                }

                $.ajax({
                    url: '../api/rent_car.php',
                    method: 'POST',
                    data: { car_id: carId, days: days, start_date: startDate },
                    success: function(response) {
                        console.log('Response:', response);
                        if (response === 'success') {
                            alert('Car rented successfully');
                            fetchCars(); // Reload the car list to reflect changes
                        } else {
                            alert(response);
                        }
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', status, error);
                        alert('Failed to rent car. Please try again.');
                    }
                });
            });

            // Fetch and display the cars when the page loads
            fetchCars();
        });
    </script>
</body>
</html>
