<?php
// Start session
session_start();

// Include database configuration
include('../db/config.php');

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate inputs
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $user_type = $_POST['user_type'];

    // Query to fetch user details using prepared statement
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE email=? AND user_type=?");
    $stmt->bind_param("ss", $email, $user_type);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($user_id, $hashed_password);
        $stmt->fetch();
        
        // Verify password
        if (password_verify($password, $hashed_password)) {
            // Set session variables
            $_SESSION['user_id'] = $user_id;
            $_SESSION['user_type'] = $user_type;

            // Redirect based on user type
            if ($user_type == 'agency') {
                header("Location: ../agency/dashboard.php");
                exit();
            } else {
                header("Location: ../customer/dashboard.php");
                exit();
            }
        } else {
            $_SESSION['login_error'] = "Invalid credentials";
            header("Location: ../agency/login.php"); // Redirect to login page
            exit();
        }
    } else {
        $_SESSION['login_error'] = "Invalid credentials";
        header("Location: ../agency/login.php"); // Redirect to login page
        exit();
    }
} else {
    // Redirect if accessed directly without POST method
    header("Location: ../agency/login.php");
    exit();
}

// Close statement and database connection
$stmt->close();
$conn->close();
?>
