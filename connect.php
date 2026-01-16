<?php

$host = "localhost"; // Database host
$dbname = "lab1_db"; // Database name
$username = "root"; // Database username
$password = ""; // Database password

// Creating connection with PDO
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully";
    
} catch(PDOException $e) {

    echo "Connection failed: " . $e->getMessage();
   
}