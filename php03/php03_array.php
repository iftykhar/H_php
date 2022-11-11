<?php


// $soldiers = array(
//     "rahim",
//     "karim",
//     123,
//     "monir",
// );

$soldiers = [
    "david",
    "jake",
    "harly",
    "monir",
    "jalal",
];

// var_dump($soldiers);


$soldiers[4] = "sarvent";




// $n =count($soldiers) ; 
// for($i = 0; $i < $n ; $i++){
//     echo $soldiers[$i]."\n";
// }


// $soldier = array_shift($soldiers); // deletes one element of array from top
// $soldier = array_shift($soldiers); 
// $soldier = array_pop($soldiers); // deletes one element of array from bottom

// print_r($soldiers);


$soldiers[] = "sarwar"; // noramlly this is how adding another elemenet of array at the end of the array
array_push($soldiers,"Hisenburg","studegar"); //adds one or more element at the end of the array

array_unshift($soldiers, "Olaf sholts","Erwin rommle");// adds one or more element at the top of the array

$n = count($soldiers);
for($i = 0; $i< $n; $i++){
    echo $soldiers[$i]."\n";
}

//array is not immutable which means changeable
// constant is immutable meaning unchangable


// for($i = $n-1; $i >= 0; $i--){
//     echo $soldiers[$i]."\n";
// }

