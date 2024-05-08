<?php
// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if the username and password are valid
    if ($username === 'admin' && $password === 'password') {
        // Authentication successful
        echo 'Login successful!';
    } else {
        // Authentication failed
        echo 'Invalid username or password.';
    }
}
?>