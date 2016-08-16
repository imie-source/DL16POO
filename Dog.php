<?php
require_once("Mammal.php");

class Dog extends Mammal{

    public function __construct($firstname ="Medor", $age=null){
        $this->setFirstname($firstname);
        $this->setAge($age);
    }

    public function bark(){
        echo "Bwouf <br/>";
    }

    public function sit(){
        echo "*the dog sit...*";
    }
}