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



$coachs = [
    '38'=>'mostofa',
    '50'=>'salauddin',
    '45'=>'kader',
];

// echo $coachs[45];
$drinks = [
    'fruits'=>'orange, banana, apple',
    'milk'=>'chocholate, mango, banana',
    'cold'=>'pepsi, rc, coce',
];

// echo $drinks['cold'];

foreach($drinks as $key=>$value){
    echo $key."-".$value.PHP_EOL;
}

echo  "*****".PHP_EOL;

$keys = array_keys($drinks);
for ($i=0; $i < count($keys) ; $i++) { 
    $key = $keys[$i];
    echo $drinks[$key].PHP_EOL;
}
echo "++++++++".PHP_EOL;
$values = array_values($drinks);
for($i = 0; $i < count($values); $i++){
    $value = $values[$i];
    // echo $drinks[$value].PHP_EOL;
    echo $value.PHP_EOL;
}