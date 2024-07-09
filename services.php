<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Car Rental Services</title>
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
        .service-item {
            margin-bottom: 30px;
        }
        .service-icon {
            font-size: 36px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <?php 
       include('./navbar.php');
    ?>
    <div class="container">
        <h2 class="text-center">Our Services</h2>
        
        <div class="service-item">
            <div class="row">
                <div class="col-md-2 text-center">
                    <span class="service-icon"><i class="fas fa-car"></i></span>
                </div>
                <div class="col-md-10">
                    <h4>Wide Range of Vehicles</h4>
                    <p>We offer a diverse fleet of vehicles including sedans, SUVs, luxury cars, and more to suit your needs.</p>
                </div>
            </div>
        </div>
        
        <div class="service-item">
            <div class="row">
                <div class="col-md-2 text-center">
                    <span class="service-icon"><i class="fas fa-calendar-alt"></i></span>
                </div>
                <div class="col-md-10">
                    <h4>Flexible Rental Plans</h4>
                    <p>Choose from flexible rental plans tailored to your schedule and budget, whether for short-term or long-term rentals.</p>
                </div>
            </div>
        </div>
        
        <div class="service-item">
            <div class="row">
                <div class="col-md-2 text-center">
                    <span class="service-icon"><i class="fas fa-headset"></i></span>
                </div>
                <div class="col-md-10">
                    <h4>24/7 Customer Support</h4>
                    <p>Our dedicated customer support team is available around the clock to assist you with any inquiries or issues.</p>
                </div>
            </div>
        </div>
        
        <div class="service-item">
            <div class="row">
                <div class="col-md-2 text-center">
                    <span class="service-icon"><i class="fas fa-road"></i></span>
                </div>
                <div class="col-md-10">
                    <h4>Roadside Assistance</h4>
                    <p>We provide comprehensive roadside assistance to ensure your journey is safe and hassle-free.</p>
                </div>
            </div>
        </div>
        
        <div class="service-item">
            <div class="row">
                <div class="col-md-2 text-center">
                    <span class="service-icon"><i class="fas fa-globe"></i></span>
                </div>
                <div class="col-md-10">
                    <h4>Online Booking</h4>
                    <p>Conveniently book your rental vehicle online through our secure booking platform, available 24/7.</p>
                </div>
            </div>
        </div>
        
        <div class="service-item">
            <div class="row">
                <div class="col-md-2 text-center">
                    <span class="service-icon"><i class="fas fa-users"></i></span>
                </div>
                <div class="col-md-10">
                    <h4>Corporate Services</h4>
                    <p>We offer special corporate packages and services tailored to meet the needs of businesses and organizations.</p>
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
