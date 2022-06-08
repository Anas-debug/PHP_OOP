<?php
    class Person{
        public $name = "Jordan";
        private $phone = 1234567891011;

        public function __construct(){
            echo "construct is called".PHP_EOL;
        }
        public function __destruct(){
            echo "destruct is called".PHP_EOL;
        }
        public function __toString(){
            return "Name: $this->name. Phone: $this->phone";
        }

    }
    
   $person1 = new Person();
   echo $person1;