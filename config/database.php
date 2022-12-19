<?php 

define('DB_HOST', $_SERVER['RDS_HOST']);
define('DB_USER', $_SERVER['RDS_USERNAME']);
define('DB_PASS', $_SERVER['RDS_PASSWORD']);
define('DB_NAME', $_SERVER['RDS_DB_NAME']);

// Create Connection

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
  } 
  