<?php

include_once "library/function.php";

$x = 16;

if(evenOrOdd($x)){
    echo "{$x} is an even number" ;
}else{
    echo "{$x} is an odd number" ;
}

echo PHP_EOL;

$x = 3;
echo "factorial of {$x} is ".factorial($x) ;
echo PHP_EOL;

// backup(4,2);
backup();
echo PHP_EOL;

echo fix_return(4,2,3);
echo PHP_EOL;
echo sum(10,15,20,5);
echo PHP_EOL;
bigfun();


echo PHP_EOL;
printNumber(10,32,10);

echo PHP_EOL;
echo fibonacci(0,1,10);
echo PHP_EOL;
