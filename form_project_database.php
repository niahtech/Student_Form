<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'Grace');
define('DB_PASS', 'solution2146');
define('DB_NAME', 'niah_registration_db');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die('Connection failed: ' . $conn->connect_error);
}

// echo 'Connected successfully';
