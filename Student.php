<?php
require_once("Mammal.php");

class Student extends Mammal{

    private $lastname;

    public function __construct($firstname, $lastname, $age = null){
        parent::__construct($firstname, $age); // calls parent constructor function
        $this->setLastname($lastname);
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