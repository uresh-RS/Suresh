<?php
$servername="localhost";
$username="root";
$password="";
$database="task";
$mysqli = new mysqli("$servername", "$username", "$password", "$database");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Gather user input
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$phone = $_POST['phone'];

// Insert user data into database
$query = "INSERT INTO user (name, email, password, address, phone) VALUES ('$name', '$email', '$password', '$address', '$phone')";
$result = $mysqli->query($query);

if ($result) {
    echo "Registration successful";
} else {
    echo "Error: " . $mysqli->error;
}

// Close connection
$mysqli->close();
?>
