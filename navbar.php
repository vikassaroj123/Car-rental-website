<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Service</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
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
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); /* Added bottom shadow */
        }
        h2 {
            margin-bottom: 30px;
            color: #343a40;
        }
        .form-group label {
            font-weight: bold;
        }
        /* Adjusting the navbar */
        .navbar {
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1); /* Adding shadow */
            background-color: #ffffff; /* Navbar background color */
        }
        .navbar-brand {
            font-weight: bold;
            color: #343a40; /* Navbar brand text color */
        }
        .nav-link {
            color: #343a40; /* Navbar links color */
        }
        .navbar-toggler-icon {
            color: #343a40; /* Navbar toggler color */
        }
        .dropdown-menu {
            background-color: #ffffff; /* Dropdown menu background */
        }
        .dropdown-item {
            color: #343a40; /* Dropdown item color */
        }
        .dropdown-item:hover {
            background-color: #f8f9fa; /* Hover background color */
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">Car Rental Service</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Customer
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <a class="dropdown-item" href="customer/register.php">Registration</a>
                        <a class="dropdown-item" href="customer/login.php">Login</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Agency
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="agency/register.php">Registration</a>
                        <a class="dropdown-item" href="agency/login.php">Login</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>

    <!-- Your content here -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
