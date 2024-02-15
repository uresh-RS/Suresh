<?php
// Connect to MySQL
$servername="localhost";
$username="root";
$password="";
$database="task";
$mysqli = new mysqli("$servername", "$username", "$password", "$database");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Gather user input
$email = $_POST['email'];
$password = $_POST['password'];

// Query database for user with matching email and password
$query = "SELECT * FROM user  WHERE email='$email' AND password='$password'";
$result = $mysqli->query($query);

if ($result->num_rows == 1) {
    echo "Login successful";
} else {
    echo "Invalid email or password";
}

// Close connection
$mysqli->close();
?>
