<?php
$servername = "localhost";
$username = "root";
$password = "Oct2023101618";
$dbname = "BIGBREW";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
