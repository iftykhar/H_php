<?php

// number system in PHP

/**
 * there are four type of number system 
 * 
 *  Decimal
 *  Binary
 *  Hexadecimal
 *  Octal
 */

$decimal = 12;
$octal = 012;
$hexadecimal = 0x12;

echo "decimal {$decimal},\nOctal {$octal},\nHexadecimal {$hexadecimal}\n";

printf("Converted Binary of %d is %b \n",12,12); // converting decimal to binary by useing %d for decimal to show and %b for binary
printf("Converted Hexadecimal of %d is %X \n",1200,1200); //converting decimal to Hexadecimal by useing %d for decimal to show and %x or %X for hexadecimal
printf("Converted Octal of %d is %o \n",12,12); //converting decimal to Octal by useing %d for decimal to show and %o for Octal


printf("octal to binary %o to %b",14,14);