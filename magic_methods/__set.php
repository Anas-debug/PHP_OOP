<?php

class Person{
    public $name = "Jordan";
    private $phone = "12345678910";

    public function __set($propName, $value){
        // __set magic method implementation
        // var_dump($propName, $value);
        if($propName === 'username'){
            $this->name = $value;
        }
    }
}

$person1 = new Person();
$person1->username = "Marry";
echo $person1->name;