<?php
    class Car{
        private $colour;
        private $weight;
        private $year;
        public $mycounter;
        static private $availableColours = [
        
            "black", "white", "orange", "grey", "metalic"
        ];
        public static function getAvailableColours(){
            return self::$availableColours;
        }
        static public $counter;
        public function __construct(){
            $this->mycounter++;
            self::$counter++;
        }
    }

    for ($i = 0; $i < 3; $i++){
        $myCar = new Car();
        echo Car::$counter.PHP_EOL;
        
    }
$myCar = new Car();

// Car::$availableColours; it doesn't work anymore it used to when $available colors was public.
echo $myCar->mycounter.PHP_EOL;

var_dump(Car::getAvailableColours());