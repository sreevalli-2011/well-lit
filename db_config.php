<?php

$servername = "localhost";
$username = "root";
$password = ""; // No space between the quotes
$dbname = "well-lit";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
