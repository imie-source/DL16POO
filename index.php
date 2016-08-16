<?php

require_once("Student.php");
require_once("Dog.php");

$student = new Student("John", "Snow", 33);
$dog = new Dog("Medor", 5);

$student->eat();
$dog->eat();




