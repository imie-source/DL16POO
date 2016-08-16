<?php
require_once("Mammal.php");

class Dog extends Mammal{

    public function __construct($firstname ="Medor", $age=null){
        parent::__construct($firstname, $age);
    }

    public function bark(){
        echo "Bwouf <br/>";
    }

    public function sit(){
        echo "*the dog sit...*";
    }
}