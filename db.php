<?php
// Database connection configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "relief_connect";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
