<?php

require_once("Student.php");
require_once("Dog.php");
require_once("Mammal.php");
require_once("Boat.php");

$student = new Student("John", "Snow");
$boat = new Boat();

var_dump($boat);

$student->makeHorn($boat);



