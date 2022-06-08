<?php

class Car{

    public $color;
    public $manifacturer;

    //class constants
    const MY_CONSTANT = [];

    const MANUFACTURER_HONDA = "Honda";
    const MANUFACTURER_LEXUS = "Lexus";
    const MANUFACTURER_MAZDA = "Mazda";
    const MANUFACTURER_AUDI = "Audi";

    const COLOR_WHITE = "white";
    const COLOR_Black = "black";
    const COLOR_SILVER = "silver";
    const COLOR_BLUE = "blue";


    static public function myTestFunction(){
        return self::MY_CONSTANT;
    }

    public function __construct($color, $manufacturer){
        $this->color = $color;
        $this->manifacturer = $manufacturer;
    }
}

// To acess our constant
Car::MY_CONSTANT;

// var_dump(Car::MY_CONSTANT);

// var_dump(Car::myTestFunction());

$myCar = new Car(Car::MANUFACTURER_HONDA, Car::COLOR_SILVER);

var_dump($myCar);