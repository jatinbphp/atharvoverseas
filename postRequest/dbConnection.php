<?php
session_start();
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = "nxsolteam"; // Replace with your database password
$dbname = "atharvoverseas"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";

// Perform database operations here...

// Close connection
//$conn->close();
?>