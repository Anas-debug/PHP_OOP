<?php

// It includes both the __get and __set magic methods

    class Person{
        public $name = "Jordan";
        private $phone = "12345678910";

        public function __get($name){

        }
    }

$person1 = new Person();
$person1->phone;