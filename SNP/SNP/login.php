<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform a database query to check the user's credentials
    $sqli = "SELECT * FROM admin WHERE admin_name='$username' AND password='$password'";
    $result = $conn->query($sqli);

    if ($result) {
        if ($result->num_rows > 0) {
            echo "<script>alert('Logged in successfully!!!'); window.location.href = 'admin-panel.php';</script>";
        } else {
            echo "<script>alert('Invalid username or password'); </script>";
        }
    } else {
        echo "<script>alert('ERROR: could not execute the query.');</script>";
        echo $conn->error;
    }
}

$conn->close(); // Close the database connection
?>
