<?php 

// conditional logic

// $n = 12;
$n =9;
$m = 16;

if ($m % 2 == 0) {
    echo "$m is an even number\n";
}else{
    echo "$m is an odd number\n";
}

/*
assingment operators

= assinging operator
== equal to operator
!= not qual to operator
> greater than 
< less than
>= greater than or equal to
<= less than ot equal to

logical operator
AND or &&
OR or ||
NOT or !
XOR 
*/

if ($n > 10) {
    echo "$n is greater than 10\n";
}elseif($n < 10){
    echo "$n is less than 10\n";
}elseif($n >= 10){
    echo "$n is more than or equal 10\n";
}elseif($n <= 10){
    echo "$n is less than or equal 10\n";
}

$alam = 10000;
$rahim = 11000;

if($alam > $rahim){
    echo "Alam has more money than Rahim\n";
}elseif($alam < $rahim){
    echo "Alam has less money than rahim\n";
}elseif($alam >= $rahim){
    echo "Alam has more or same money of rahim\n";
}elseif($alam == $rahim){
    echo "Alam and Rahim has the same amount of money\n"; 
}

#check teenager 

// $age = 25;
$age = 38;

if($age >= 13 AND $age <= 19){
    echo "This person is a teenager";
}elseif($age>=20 && $age <= 29){
    echo "This person is in their tweenties";
}elseif($age>=30 && $age<=39) {
    echo "this person is in their Thirtys";
}elseif($age>=40 && $age<=49) {
    echo "this person is in their Fortys";
}
echo "\n";

#Food Value check

$food = "mango";

if ("lichi" == $food || "mango" == $food ) {
    echo "{$food} contains vitamin A";
} else {
    echo "{$food} do not contain's vitamin A";
}

echo "\n";

#leap year problem

// 1- divisible by 4
// 2- divisible by 100
// 3- divisible by 400

$year =1998;
if($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0){
    echo "{$year} is a leap year";
}else if ( $year % 4 == 0 && $year % 100 == 0){
    echo "{$year} is not a leap year";
}else if ($year % 4 == 0){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}
echo "\n";

#shortly written the same thing

if($year % 4 == 0 &&($year % 100 != 0 || $year % 400 == 0)){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}


echo "\n";
#nested If Else and the delima of losely and big code

$cond1 = true;
// $cond2 = true;
$cond2 = false;
// $cond3 = true;
$cond3 = false;

if($cond1){
    if ($cond2) {
        if ($cond3) {
            echo "Hello";
        }else{
            echo "No 1";
        }
    }else{
        echo "No 2";
    }
}else{
    echo "No 3";
}

echo "\n";

if($cond1 && $cond2 && $cond3){
    echo "hello";
}elseif($cond1 && $cond2){
    echo "No 1";
}elseif($cond1){
    echo "No 2";
}else{
    echo "No 3";
}