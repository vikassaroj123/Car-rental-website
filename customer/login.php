<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
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
    <?php include('../navbar.php'); ?>
    <div class="container">
        <h2 class="text-center">Customer Login</h2>
        <?php
        // Display login error message if set
        if (isset($_SESSION['login_error'])) {
            echo '<div class="alert alert-danger">' . $_SESSION['login_error'] . '</div>';
            unset($_SESSION['login_error']);
        }
        ?>
        <form action="../api/login.php" method="POST">
            <input type="hidden" name="user_type" value="customer">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Login</button>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
    <script>
        $(document).ready(function() {
            // Function to check if login success parameter exists in URL
            function checkLoginSuccess() {
                const urlParams = new URLSearchParams(window.location.search);
                if (urlParams.has('login') && urlParams.get('login') === 'success') {
                    // Show popup message
                    alert('Login successful!');
                    // Remove the login=success parameter from URL to avoid showing popup on refresh
                    window.history.replaceState({}, document.title, "./login.php");
                }
            }

            // Call the function on document ready
            checkLoginSuccess();
        });
    </script>
</body>
</html>
