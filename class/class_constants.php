<?php

class Car{

    public $color;
    public $manifacturer;

    //class constants
    const MY_CONSTANT = [];

    static public function myTestFunction(){
        return self::MY_CONSTANT;
    }
}

// To acess our constant
Car::MY_CONSTANT;

// var_dump(Car::MY_CONSTANT);

var_dump(Car::myTestFunction());
