<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Our Car Rental Agency</title>
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
        p {
            margin-bottom: 15px;
        }
        .service-list {
            list-style-type: none;
            padding-left: 0;
        }
        .service-list li {
            margin-bottom: 5px;
        }
        .testimonial {
            margin-bottom: 30px;
            padding: 15px;
            background-color: #f8f9fa;
            border-left: 4px solid #007bff;
        }
    </style>
</head>
<body>

    <?php 
       include('./navbar.php');
    ?>

    <div class="container">
        <h2 class="text-center">About Our Car Rental Agency</h2>
        <div class="row">
            <div class="col-md-6">
                <h4>Who We Are</h4>
                <p>We are a leading car rental agency based in Gurgaon, India, serving both local and international customers with top-notch rental services.</p>
                <h4>Our Services</h4>
                <ul class="service-list">
                    <li>Extensive fleet of vehicles including sedans, SUVs, luxury cars, and more</li>
                    <li>Flexible rental plans tailored to individual and corporate needs</li>
                    <li>24/7 customer support and roadside assistance for a seamless experience</li>
                    <li>Convenient online booking system with secure payment options</li>
                    <li>Special packages for long-term rentals and corporate clients</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Our Commitment</h4>
                <p>At XYZ Car Rentals, we prioritize customer satisfaction by maintaining a fleet of well-maintained vehicles and providing personalized service to meet diverse needs.</p>
                <h4>Customer Testimonials</h4>
                <div class="testimonial">
                    <p><strong>John Doe</strong></p>
                    <p>"Excellent service! The car was clean and ready on time. Highly recommended."</p>
                </div>
                <div class="testimonial">
                    <p><strong>Jane Smith</strong></p>
                    <p>"Great experience with XYZ Car Rentals. Will definitely rent from them again."</p>
                </div>
            </div>
        </div>
        <h4>Contact Us</h4>
        <p><strong>Address:</strong> 123 Main Street, Cityville, Gurgaon, India</p>
        <p><strong>Phone:</strong> +91 987 654 3210</p>
        <p><strong>Email:</strong> info@xyzcarrentals.com</p>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>
</html>
