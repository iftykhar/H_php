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
// print_r($foods);
echo "====---=====".PHP_EOL;

// echo $foods['vegitables'][3];


$sample = [
    'test'=>[
        'test1'=>['nested array'],
    ],
];

echo $sample['test']['test1'][0];
echo "====---=====".PHP_EOL;

$sample2 = [
    [1,2,3,4],
    [11,22,33,44],
    [111,222,333,444],
];
echo $sample2[2][2];