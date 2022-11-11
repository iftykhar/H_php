<?php
 #associative array

//  $captins = [
//     'alpha' => 'shahed',
//     'beta' => 'fahad',
//     'charlie' => 'jamal',
//  ];

//  echo $captins['alpha'];


/**
 * in associative array  the elements of array is saved as 
 * $variable = [
 *      'key' =>  'element1,element2',
 *      'key' =>  'element1,element2', 
 * ];
 */
$foods = [
    'vegitables' => 'brinjal, brocoli, carrot, capsicam',
    'fruits' => 'banana, orange, apple',
    'drinks '=> 'water, milk, coco-water', 
];

// $foods['drinks'] = $foods['drinks'].", orange juice";
$foods['drinks'] .= ", orange juice"; //shorter version doing same thing of the previous line

// echo $foods['vegitables'];



/** for each  loop is basically designed to 
 *  Use for associative array
 * 
 * 
 */

//  foreach($foods as $key=>$value){
//     echo "{$key}=>{$value}.\n";
//  }

 $keys = array_keys($foods);
 print_r($keys);
 for ($i=0; $i<count($foods);$i++){
    echo $foods[$keys[$i]]."\n";
}
echo PHP_EOL;
$values = array_values($foods);

for($i=0;$i<count($foods);$i++){
    $value = $values[$i];
    echo $value."\n";
}

echo "--------=======------\n";



