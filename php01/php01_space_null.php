<?php
$x = 4;
$y = 5;

function greaterOrSmaller($x,$y){
    if($x>$y){
        return 1;
    }else if($x == $y){
        return 0;
    }else{
        return -1;
    }
}

if(greaterOrSmaller($x,$y) == 1){
    echo "{$x} is greater than {$y}";
}else if(greaterOrSmaller($x,$y) == 0){
    echo "{$x} is equal to {$y}";
}else if(greaterOrSmaller($x,$y) == -1){
    echo "{$x} is smaller than {$y}";
}
echo "\n";

// spaceship operator (<=>)
//  spaceship operator works more flexiblly and helps reduce bulky code like in the previous function

$result = $x<=>$y;
if($result == 1){
    echo "{$x} is greater than {$y}";
}else if($result == 0){
    echo "{$x} is equal to {$y}";
}else if($result == -1){
    echo "{$x} is smaller than {$y}";
}

echo "\n";

#null coalesce operator (??)

// it is more easy version of ternary operator

$default_lat = 23.3;
$default_lon = 90.5;

// $user_lat;
$user_lat = 15.6;

// $lat = isset($user_lat) ? $user_lat : $default_lat;

$lat = $user_lat ?? $default_lat;


echo $lat;