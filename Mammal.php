<?php

class Mammal{    
    private $firstname;
    private $age;

    public function __construct($firstname, $age = null){
        $this->setFirstname($firstname);
        $this->setAge($age);
    }

    public function eat(){
        echo "Grumph Grumph...";
    }

    protected function normalize($name){
        return ucfirst(strtolower($name));
    }

    public function getFirstname(){
        return $this->firstname;
    }

    public function setFirstname($firstname){
        $this->firstname = $this->normalize($firstname);
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        if($age > 0){
            $this->age = $age;
        }
        else{
            $this->age = 0;
        }
    }
}