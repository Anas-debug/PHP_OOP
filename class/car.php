<?php
    class Car{
        private $colour;
        public $weight;
        private $year;
        private $availableColours = [
            "black", "white", "orange", "grey", "metalic"
        ];

        public function setYear($year){
            $this->year = $year;
        }
        public function getYear(){
            return $this->year;
        }
        public function setColor($colour){
            if(in_array($colour, $this->availableColours)){
                $this->colour = $colour;
            }
        }
        public function getColor(){
            return $this->colour;
        }

        public function __construct($colour, $weight){
            //echo "object constructed!";
            $this->colour = $colour;
            $this->weight = $weight;
            echo "car constructed with $colour colour and $weight weight"."<hr>";
        }
        public function __destruct(){
            echo "I am destroyed!".$this->colour.PHP_EOL;
        }
    }

    // $myCar = new Car();
    // // echo var_dump($myCar);
    // $myCar->setYear(year: 2000);
    // $myCar->setColor("grey");
    // echo $myCar->getYear();
    // echo $myCar->getColor();

    $myCar = new Car('black', "1T");  
     
    //Manually destroy an Object
    unset($myCar);
    $myCar1 = new Car("grey", "2T");
    $myCar2 = new Car("white", "3t");
    sleep(2);