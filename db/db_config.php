<?php
// Assuming your database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_train";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "connect success";