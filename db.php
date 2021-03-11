<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "builder_db";

// Create connection syntax
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>