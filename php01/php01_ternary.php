<?php
// ternary operator 


#normal conditional 

$n = 20;

if( 12 == $n ){
    echo "Twelve";
}elseif( 15 == $n){
    echo "Fifteen";
}elseif(20 == $n){
    echo "Tweenty";
}else{
    echo "A Number";
}
echo "\n";

// how a ternary operator works

// $ntoword  = (12 == $n ) ? "Twelve" : "A Number";
$ntoword  = (12 == $n ) ? "Twelve" : ((15 == $n ) ? "Fifteen":((20 == $n) ? "Tweenty" : "A Number")) ;
echo $ntoword;
echo "\n";

if($n % 2 == 0){
    echo "Even Number";
}else{
    echo "Odd Number";
}
echo "\n";

$EvenOdd = ($n %2 == 0) ? "Even" : "Odd";
echo $EvenOdd;
echo "\n";

#switch case

// showing switch case how works

switch(0){
    case 0:
        echo " hello there\n";
        break;
    default:
        echo "why hello there\n";
}
echo "\n";

$month = "july";

switch($month){
    case "january":
        echo "{$month} is for Jogging ";
        break;
    case "february":
        echo "{$month} is for Furnishing";
        break;
    case "march":
        echo "{$month} is for Marchendising";
        break;
    case "april":
        echo "{$month} is for Application";
        break;
    case "may":
        echo "{$month} is for magistif";
        break;
    case "june":
        echo "{$month} is for Junk";
        break;
    case "july":
        echo "{$month} is for Jewelary";
        break;
    case "august":
        echo "{$month} is for awesome";
        break;
    case "septembar":
        echo "{$month} is for separation";
        break;
    case "octobar":
        echo "{$month} is for octopose";
        break;
    case "novembar":
        echo "{$month} is for novices";
        break;
    case "decembar":
        echo "{$month} is decency";
        break;
    default :
        echo "this is out the 12 months";
    
}
echo"\n";

#nested sswitch case 
 $num = -9;
 $r = $num % 2;

 switch($r){
    case 0:
        switch($num){
            case $num > 0 :
                echo "{$num} is a positive even number";
                break;
            case $num < 0 :
                echo "{$num} is a positive odd number";
        }
        break;
    default:
        switch($num){
            case $num > 0 :
                echo "{$num} is a negative even number";
                break;
            case $num < 0 :
                echo "{$num} is a negative odd number";
                break;
        }
 }

 echo "\n";

 switch(true){
    case (/*$r==0*/ 0==$r && $num>0):
        echo "{$num} is a positive even number";
        break;
    case (/*$r==1*/ 1==$r  && $num>0):
        echo "{$num} is a positive odd number";
        break;
    case (/*$r==0*/ 0==$r && $num<0):
        echo "{$num} is a negative even number";
        break;
    case (/*$r==1*/ -1==$r && $num<0):
        echo "{$num} is a negative odd number";
        break;
 }
 echo "\n";

 #some exceptional facts about switch case

 $name = "8balls";

 switch($name){
    case "9balls":
        echo "Nine Ball";
        break;
    case 8:
        echo "8";
        break;
    case "8balls":
        echo "Eight Ball";
        break;
    
 }
 echo "\n";

 #operator precedence 

//  https://www.php.net/manual/en/language.operators.precedence.php

//  $f = false || true;//ture
//  $e = false or true;// ($e = false) or true / $e = false

 $f = true && false;
 $e = true and false;
 var_dump($f,$e);
 echo"\n";

 #php control structure

//  normal if else

$no = 12;
if($no % 2 == 0 ){
    echo "even number";
}else{
    echo "odd number";
}
echo PHP_EOL;

if($no%2==0):
    echo "even number";
    echo PHP_EOL;
    echo "text";
else:
    echo "odd number";
    echo PHP_EOL;
    echo "text";
endif;