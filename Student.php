<?php
require_once("Mammal.php");
require_once("IVehicle.php");

class Student extends Mammal{

    private $lastname;
    private static $nbStudent = 0;
    const MAX_STUDENTS = 100;

    public function __construct($firstname, $lastname, $age = null){
        parent::__construct($firstname, $age); // calls parent constructor function
        $this->setLastname($lastname);
        self::$nbStudent++;
    }

    public function makeTheShow(IVehicle $v){
        $v->start();
        $v->turn(-90);
        $v->turn(180);
        $v->horn();
        $v->horn();
        $v->horn();
        $v->stop();
    }


    public function yell(){
        echo "BWWWWOOAAAAAAAAAAA!";
    }

    public static function getNbStudent(){
        return self::$nbStudent;
    }

    public function eat(){
        echo $this->getFirstname() . " prend son couteau et sa fourchette pour manger.<br/>";
        parent::eat();
    }

    public function getLastname(){
        return $this->lastname;
    }

    public function setLastname($lastname){
        $this->lastname = $this->normalize($lastname);
    }

    public function getFullname(){
        return $this->getFirstname() . ' ' . $this->getLastname();
    }

    public function sayHello(){
        echo "Bonjour je m'appelle " . $this->getFullname() . '<br/>';
    }

}