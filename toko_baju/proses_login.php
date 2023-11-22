<?php
// Include file koneksi ke database
include("connection.php");

// Function to sanitize input data
function sanitize($input)
{
    global $conn;
    return mysqli_real_escape_string($conn, htmlspecialchars(trim($input)));
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get username and password from the form
    $username = sanitize($_POST['username']);
    $password = sanitize($_POST['password']);

    // Query to check if the entered username and password match
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";

    // Execute the query
    $result = mysqli_query($conn, $query);

    // Check if the query was successful
    if ($result) {
        // Check if a row is returned (matching credentials)
        if (mysqli_num_rows($result) == 1) {
            // Start a session
            session_start();

            // Fetch user data
            $user = mysqli_fetch_assoc($result);

            // Store user data in the session
            $_SESSION['user_id'] = $user['id_pengguna'];
            $_SESSION['username'] = $user['username'];

            // Check the user's role
            if ($user['role'] == 'admin') {
                // Redirect to admin page
                header("location: ../toko_baju_admin/index.php");
                exit();
            } else {
                // Redirect to a welcome page or dashboard
                header("Location: index.php");
                exit();
            }
        } else {
            // Invalid credentials, redirect back to the login page with an error message
            echo '<script>alert("Username/Password Salah"); window.location.href="login.php";</script>';
            exit();
        }
    } else {
        // Database error, redirect back to the login page with an error message
        echo '<script>alert("Database error"); window.location.href="login.php";</script>';
        exit();
    }
} else {
    // Redirect back to the login page if the form is not submitted
    header("Location: login.php");
    exit();
}
