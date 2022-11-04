<?php

// working on variables
$numb = 45; //integer type variable

$age = 'numb'; //string type

$name = 'Iftykhar';
echo $$age."\n"; // the $$age is $($age) where $age = 'numb' and $numb = 45  so $$age is that and (.) is the concatenation tag for PHP

echo "Hi there, i am{$name}\nand i am {$$age}";


// discussing CONSTANTS 

//Generally constants are written at the beggining portion of the code but here for learning purpose we are doing it on later lines of the code

define('PI',3.1415); /* constants are declared with DEFINE keyword and unchangeable by later lines of code but
                         prior or previous lines of code can change  the later line codes excution */ 

$radius = 8;

$area = 2*$radius*PI;

echo "\nThe circumfarence of the wheel is \nArea ={$area}"; //{$variable}  is another convention to use variable inside the " " it is a standerd way writing PHP

echo "\n";
var_dump($name); //var_dump() is a sort of function that will show what type of data_type and what is stored in the variable.
$null = null;
var_dump($null);
$boolean = true;
var_dump($boolean);
printf("\n who are %s?\nAre you %s years old?\n","you",$$age);  //printf() is another way to  print lines. specially replace something in the line if needed.



?>