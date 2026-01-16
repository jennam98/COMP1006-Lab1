<?php 
require "header.php"; 
echo "<p> Follow the instructions outlined in instructions.txt to complete this lab. Good luck & have fun!😀 </p>";
require "footer.php"; 

require "car.php"; // Including car.php file

require "connect.php"; // Including connect.php file



// Creating new car object

$myCar = new Car("Honda", "Civic", 2012);

echo "<p> My Car Information:.</p>";
echo $myCar->getCar();  // Displaying car information in browser

?>

