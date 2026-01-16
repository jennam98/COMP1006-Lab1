<?php

$host = "localhost"; // Database host
$dbname = "lab1_db"; // Database name
$username = "root"; // Database username
$password = ""; // Database password

// Creating connection with PDO
try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password); // Creating new PDO instance
    // Set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

    echo "Connected successfully"; //will show this message if connection is successful
    
} catch(PDOException $e) { // Catching any connection errors

    echo "Connection failed: " . $e->getMessage(); //will show this message if connection fails
   
}