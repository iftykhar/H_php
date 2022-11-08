<?php

// loops
 /**
  * there are minimum four types of loop in php
  * foreach
  * for
  * while
  * do..while
  * in old time there was one called goto loop too.
  */

  #for loop 

  for($i =1; $i<=5; $i++){
    // echo "i did my homework";
    echo PHP_EOL;
    for($j=0; $j<$i; $j++){
        echo "*";
    }

  }
  echo"\n";
  for($i = 0; $i<11; $i += 3){
    echo $i;
    echo PHP_EOL;
  }

  #while loop

//beware of while loop 
/** if not with set parameters and run while(true) it will run 
 * infinite time and will cause damage to memory of the computer 
 * specially the ram 
 * #I did this mistake and regreating viriously.
 */

$n = 0;
  while($n<10){
    // echo "nice";
    $n++;
    echo $n."time\n";
    
  }
echo PHP_EOL;

# Do loop

$i=0;
do{
  $i+=2;
  echo $i.PHP_EOL;
}while($i<10);

#go to loop
$i =0;
a: $i++;
echo $i.PHP_EOL;
if($i<10) goto a;
echo PHP_EOL;

#for loop stepping

for ($i=10,$j=0; $i >0 ; $i--,$j++) { 
  echo $i.":".$j;
  echo " ";
  echo $i.":".(11-$i);
  echo PHP_EOL;
}


#Factorial finding with for loop in php

$n = 5;
for($i=$n,$fact = 1; $i>1;$i--){
  $fact = $fact * $i;
}

printf("Factorial of %d is %d\n",$n,$fact);
// just for test a fcatorial function

/*function facto($n){
  for($i = $n, $facto = 1; $i>1; $i--){
    $facto *= $i;
  }
  return "the factorial of number {$n} is ".$facto;
}

echo facto(9);*/

#for lloop multiple stepping

for($i=0; $i<100; $i++){
  // if($i%7 ==0) echo $i.PHP_EOL;
  // if($i%11 ==0) echo $i.PHP_EOL;

  echo $i%7 ==0 ? $i.PHP_EOL : '';
  echo $i%11 ==0 ? $i.PHP_EOL : '';
}
echo PHP_EOL;
for($i = 0, $j = 0; $i < 100; $i += 7, $j +=11){
  echo $i."\n";
  echo $j<100? $j."\n":'';
}
echo PHP_EOL;


#while loop

$i = 0;
while ($i < 5){
  echo $i;
  echo PHP_EOL;
  $i++;
}
echo "==--==--\n";
$j = 0;
while ($j++ < 5 ) {
  echo $j;
  echo PHP_EOL;
}
echo "==--==--\n";
$j = 0;
while(++$j<5){
  echo $j;
  echo PHP_EOL;
}

echo"--------------------\n";
#continue and break in loop

for($i = 20 ; $i <30; $i++){
  // echo $i;
  // echo PHP_EOL;


  // if( $i % 13 == 0 ){
  //   echo $i;
  //   echo PHP_EOL;
  //   break;
  // }

  if($i<27){
    continue;
  }
  echo $i;
  echo PHP_EOL;

}

## fibonacci series with PHP

// 0 1 1 2 3 5 8 13 21 34 .......

$vo = 0;
$o = 1;
$n = 1;

for($i = 0 ; $i < 15; $i++){
  echo $vo." ";
  $o = $n;
  $n = $o + $vo;
  $vo = $o;
}