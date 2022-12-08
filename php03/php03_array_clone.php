<?php

//deep copy
//copy by value

$person = array('fname'=> 'hello', 'lname'=> 'world');
$newperson = $person;
$newperson['lname'] = 'mars';

print_r($person);
print_r($newperson);

echo "******************\n";

$officer = array('batch'=> '23', 'designation'=> 'SI');
$newofficer = $officer;
$newofficer['designation'] = 'ASP';

print_r($officer);
print_r($newofficer);

echo "------=====-------=======--------\n";
//copy by reference
// shallow copy

$student = array('fname'=>'jamal', 'lname'=>'ahmed');
$newStudent = &$student; // the "&" is the symbol that differentiate an array copy by reference
$newStudent['lname'] = 'khan';

print_r($student);
print_r($newStudent);

echo "********************\n";

$captine = array('company'=> '2nd', 'lname'=> 'sadek');
$newcaptine = &$captine;

print_r($captine);
print_r($newcaptine);