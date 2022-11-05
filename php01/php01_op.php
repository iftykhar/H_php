<?php


//Arithmatic Operator + - * / %
$number = 12; //assigned value
// $number += 12; //addtion operator
// $number -= 6; // Subtraction Operator
// $number /= 3; //Division Oparetor
// $number **= 2; // Power Oparetor
$number3 = $number % 10; // Modulas(reminder) Oparetor

$number2 = $number + 12;



echo $number,"\n".$number2,"\n".$number3;
//increment and decrement oparetor ++ -- 
$number++; // the ++ operator increases digit by 1 everytime the ++ operator runs.
$number--; // the -- operator decrease digit by 1 everytime the -- operator runs.
echo "\n".$number."\n";

$n = 3;
// $m = $n++; //in here the value of $m increase after printing $n=3
/*
$m = $n++; means
$m = $n;
$n = $n +1;
 */
$m = ++$n; //in here the value of $n increase before printing;
/*
$m = ++$n; means
$n = $n +1;
$m = $n;
 */
echo $m,"\n".$n;

