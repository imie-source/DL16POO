<?php
require_once("Mammal.php");

class Student extends Mammal{

    private $lastname;

    public function __construct($firstname, $lastname, $age = null){
        $this->setFirstname($firstname);
        $this->setLastname($lastname);
        $this->setAge($age);
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