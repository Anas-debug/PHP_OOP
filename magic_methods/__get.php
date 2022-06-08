<?php

// It includes both the __get and __set magic methods

    class Person{
        public $name = "Jordan";
        private $phone = "12345678910";

        public function __get($propName){
            if($propName === 'username'){
                return $this->name;
            }
            return "Property \"$propName\" does not exist";
        }
    }

$person1 = new Person();
// $person1->phone;
echo $person1->username1;