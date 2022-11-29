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

echo "*******--------=========-------******".PHP_EOL;
$student = array(
    'fname'=>'kamal',
    'lname'=>'ahmed',
    'age'=>'20',
    'class'=>9,
    'section'=>'B',
);

print_r($student);

// echo $student['age'];
echo $student['fname']." ".$student['lname']."\n";

printf("%s %s \n", $student['fname'],$student['lname']);

echo join($student); //join is used for turning array into string
echo "*******--------=========-------******".PHP_EOL;

$stus =  serialize($student); // serialize() is a function  to convert array into  string  change array into a string 

echo "\n";
// $stu = unserialize($student);
echo $stus;

$newstus = unserialize($stus);  // unserialize() is a function to revert any serialized string into array once again but not all of it is readable through human eye PHP can read it just fine


print_r($newstus); 

echo PHP_EOL;

#JSON JavaScript Object Notation is used to convert array into string as well it is readable entirly by humans and most importantly it is useable is JavaScript 

$jsondata = json_encode($student); //json_encode() is a function that is used to turn any array into json format 
echo $jsondata;
// $student02 = json_decode($jsondata); //json_decode() is the fucntion that  reverts the json format to previous form. or more likely to standerd formate.
$student02 = json_decode($jsondata, true);  //but to find it  the decoded data into array formate you must add the json_decode(json, true) parameter "true" additively 
// echo $student02;
print_r($student02);