<?php
$fname = "Hasin";
$lname = "Hayder";
$middlename = "Ahmed";

printf("His name is %s %s\n",strtoupper($fname),$lname); //using printf()

// variable swaping 

printf('His Lastname is %3$s Middlename is %2$s and Firstname is %1$s',$fname,$middlename,$lname); // anything inside of the first bracket is considered as arguments

printf("\nThe binary equivalent of %d is %b\n",12,12);
printf('The binary equivalent of %1$d is %1$x',20);
echo "\n";

$n = 34.4656;
printf("%.3f",$n); //digit fixing of float numbers
echo "\n";

$m = 500.5445; //
$n = 63.5546; //

printf("%06.2f \n", $m);
printf("%06.2f \n", $n);


$output = sprintf("His name is %s %s\n",strtoupper($fname),$lname); 

echo $output;