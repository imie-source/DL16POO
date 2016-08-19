<?php

require_once("Student.php");
require_once("Dog.php");

$gab = new Student("Gabriel", "Block");

$dog = new Dog("Medor");
$dog2 = new Dog("Brutus");
$dog3 = new Dog("Mabrook");



$gab->addDog($dog);
$gab->addDog($dog2);
$gab->addDog($dog3);

// var_dump($gab, $dog, $dog2, $dog3);

// $gab->makeBark();

$gab->getDogs()[2]->bark();

// var_dump($gab);

//$gab->getDog()->bark();

//var_dump($dog);

//$dog->biteMaster();