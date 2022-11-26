<?php
# string to array && array to string and miltiple delimeter

// from a string to array conversion therer is a predefined  php function explode();


$vergitables = explode(',','bringjal,brocoli,carrot,capsicam'); // the ',' in the explode function is the "delimeter" of explode function

var_dump($vergitables);

$vegi = join(', ', $vergitables);

var_dump($vegi);
echo PHP_EOL;

$dish = explode(', ', 'meat, vegitable, dairy, sweet');
var_dump($dish);

echo PHP_EOL;
$dish =   join(', ',$dish);
var_dump($dish);