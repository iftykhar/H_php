<?php
// variable scoping


// $name = "moon"; // global scope

// function something(){
//     global $name;
//     echo $name;
// }

// something();

// function dosomething(){
//     $name = "moon"; //local scope
//     echo $name;
// }

// dosomething();

function dosomething(){
    static $i; // static scope
    $i = $i ?? 0;

    $i++;
    echo $i;
    echo PHP_EOL;
}

function extra(){
    static $i; // static scope
    $i = $i ?? 0;

    $i++;
    echo $i;
    echo PHP_EOL;
}


dosomething();
dosomething();
dosomething();
dosomething();
extra();
dosomething();
extra();
