<?php
$servername = "localhost";
$port = "5432";
$username = "root";
$password = "";
$dbname = "d4uqjsiosndu60";

// Create connection
$conn = new mysqli($servername . ":". $port, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>