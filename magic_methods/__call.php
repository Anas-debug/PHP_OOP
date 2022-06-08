<?php

// It includes the __set magic method

    class Person{
        public $name = "Jordan";
        private $phone = "12345678910";

        public function getPhone(){
            return $this->phone;
        }
    }

$person1 = new Person();
echo $person1->getPhone();
