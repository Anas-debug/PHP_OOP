<?php

// It includes the __set magic method

    class Person{
        public $name = "Jordan";
        private $phone = "12345678910";

        public function __call($name, $arguments){
            // Implements the __call method.
            // var_dump($name, $arguments);

            if($name === 'getMobilePhone'){
                return $this->getPhone();
            }

        }

        public function getPhone(){
            return $this->phone;
        }

        public function setPhone($phone){
            $this->phone = $phone;
        }
    }

$person1 = new Person();
echo $person1->getPhone();
