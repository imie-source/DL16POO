<?php

require_once("Student.php");
require_once("Dog.php");

$student1 = new Student("John", "Snow", 33);
$student2 = new Student("John", "Snow", 33);

var_dump($student1, $student2);
var_dump($student1 === $student2);
var_dump($student1->getFirstname() === $student2->getFirstname());
var_dump($student1->getLastname() === $student2->getLastname());
var_dump($student1->getAge() === $student2->getAge());



