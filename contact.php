<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Car Rental Services</title>
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
        }
        .contact-item {
            margin-bottom: 20px;
        }
        .contact-icon {
            font-size: 24px;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <?php 
       include('./navbar.php');
    ?>
    <div class="container">
        <h2 class="text-center">Contact Us</h2>
        
        <div class="contact-item">
            <div class="row">
                <div class="col-md-2 text-center">
                    <span class="contact-icon"><i class="fas fa-map-marker-alt"></i></span>
                </div>
                <div class="col-md-10">
                    <h4>Address</h4>
                    <p>123 Main Street, Cityville, Gurgaon, India</p>
                </div>
            </div>
        </div>
        
        <div class="contact-item">
            <div class="row">
                <div class="col-md-2 text-center">
                    <span class="contact-icon"><i class="fas fa-phone"></i></span>
                </div>
                <div class="col-md-10">
                    <h4>Phone</h4>
                    <p>+91 987 654 3210</p>
                </div>
            </div>
        </div>
        
        <div class="contact-item">
            <div class="row">
                <div class="col-md-2 text-center">
                    <span class="contact-icon"><i class="fas fa-envelope"></i></span>
                </div>
                <div class="col-md-10">
                    <h4>Email</h4>
                    <p>info@xyzcarrentals.com</p>
                </div>
            </div>
        </div>
        
        <div class="contact-item">
            <div class="row">
                <div class="col-md-2 text-center">
                    <span class="contact-icon"><i class="fas fa-clock"></i></span>
                </div>
                <div class="col-md-10">
                    <h4>Opening Hours</h4>
                    <p>Monday - Friday: 9:00 AM to 6:00 PM<br>Saturday: 9:00 AM to 1:00 PM<br>Sunday: Closed</p>
                </div>
            </div>
        </div>
        
    </div>
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>
