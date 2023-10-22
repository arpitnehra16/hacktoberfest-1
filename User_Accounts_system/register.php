<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Store the user data in a database (this is a simplified example)
    // Insert the data into a users table in your database

    // Redirect to a confirmation page or the login page
}
?>
