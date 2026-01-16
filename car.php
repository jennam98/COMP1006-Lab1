
<?php

class Car {   //Creating class Car

    public $make;    //Adding properties for make, model, and year
    public $model;  
    public $year;

    public function __construct($make, $model, $year) {  // Adding Constructor to initalize
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getCar() {   // Method to return car information
        return $this->year . ' ' . $this->make . ' ' . $this->model;
    }
}