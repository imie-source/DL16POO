<?php
require_once("Mammal.php");
require_once("IVehicle.php");
require_once("Dog.php");

class Student extends Mammal{

    private $lastname;
    private static $nbStudent = 0;
    const MAX_STUDENTS = 100;
    private $dogs = [];
    private $friends = [];

    public function __construct($firstname, $lastname, $age = null){
        parent::__construct($firstname, $age); // calls parent constructor function
        $this->setLastname($lastname);
        self::$nbStudent++;
    }

    public function getFriends(){
        return $this->friends;
    }

    public function addFriend(Student $friend){
        if($friend !== $this){ // check if $friend is not me
            $this->friends[] = $friend; // add this friend to my list
        }
        // check if my friend doesn't know me as a friend
        if(array_search($this, $friend->getFriends(), true) === false){
            $friend->addFriend($this); // add me as his friend
        }
    }


    public function getDogs(){
        return $this->dogs;
    }

    public function addDog(Dog $dog){
        $this->dogs[] = $dog;
        $dog->setMaster($this);
    }

    public function removeDog(Dog $dog){
        array_splice($this->dogs, array_search($dog, $this->dogs), 1);
    }

    public function makeBark(){
        foreach($this->dogs as $dog){
            $dog->bark();
        }
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