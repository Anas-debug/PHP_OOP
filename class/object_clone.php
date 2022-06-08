<?php
    class Car{
        public $colour = "blue";
        public $weight;
        public $year;
    }

$car = new Car();
// $car_2 = & $car;

// $car_2 = null;
// var_dump($car, $car_2);

// Cloning
$car_2 = clone $car;
$car_2->colour = "grey";
var_dump($car, $car_2);

