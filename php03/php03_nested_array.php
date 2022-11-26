<?php

$foods = [
    'vegitables' => explode(', ','brinjal, brocoli, carrot, capsicam'),
    'fruits' => explode(', ','banana, orange, apple'),
    'drinks '=> explode(', ','water, milk, coco-water'), 
];


// $foods['drinks'] 
// array_push($foods['drinks'],', orange');


array_push($foods['fruits'],'jack fruit');
// var_dump($foods);
print_r($foods);