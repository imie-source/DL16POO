<?php
require_once("Mammal.php");

class Dog extends Mammal{

    private $master;

    public function __construct($firstname ="Medor", $age=null){
        parent::__construct($firstname, $age);
    }

    public function getMaster(){
        return $this->master;
    }

    public function biteMaster(){
        if(isset($this->master)){
            $this->master->yell();
        }
    }

    public function setMaster(Student $student){
        $this->master = $student;
    }

    public function yell(){
        echo "AAAAAOUUUUUUUUUUUH!";
    }

    public function bark(){
        echo "Bwouf <br/>";
    }

    public function sit(){
        echo "*the dog sit...*";
    }
}