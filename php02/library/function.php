<?php
function evenOrOdd($n)
{
    if($n % 2 == 0){
        return true;
    }
    return false;
}

function factorial(int $n){  //the int part is viable with php7

    //for php5 and other php versions integer type verification
    // if(gettype($n) !="integer"){
    //     return "invalid";
    // }
    $result = 1;
    for($i = $n; $i>1; $i--){
        $result = $result * $i;
    }
    return $result;
}

function backup(int $i_unit = 2 ,int $t_unit = 1){
    echo "{$i_unit}unit positioned north and east {$t_unit}unit on direct assult duty";
}


function fix_return(int $x, int $y, int $z):int /* in php7 this is the way of return type fixing*/{
    return $x+$y+$z;
}

// unlimited parameters in functions in php 7

function sum(int...$units):int{

    $result = 0;
    for($i=0; $i<count($units);$i++){
        $result = $result + $units[$i];
    }
    return $result;
}

#fractioning  a bigger function into smaller parts

function taskA(){
    echo "Step A done\n";
}
function taskB(){
    echo "Step B done\n";
}
function taskC(){
    echo "Step C done\n";
}
function taskD(){
    echo "Step D done\n";
}


function bigfun(){
    taskA();
    taskB();
    taskC();
    taskD();
};

# recusion or recursive function

function printN($i){
    if($i>=10){ //if there is no condition setup in the recursion process the function will act as an infinite loop and that might cause longer process time and issue to harware.
        return;  
    }

    echo $i.PHP_EOL;
    $i++;
    printN($i);
}

// printN(2);


function printNumber($counter, $end, $stepping =1){
    if($counter>$end){
        return;
    }
    echo $counter."\n";
    $counter += $stepping;
    printNumber($counter,$end,$stepping);
}


#fibonacci with recursive function

function fibonacci($old,$new, $end){
    
    static $start = 1;
    if($start > $end){
        return;
    }
    $start++;

    echo $old." ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci($old,$new,$end);

}

# recursive function factorial trial

function fact_rec($n){
   
    if($n < 2){
        return 1;
    }else{
    //    echo $fact = ($n * fact_rec($n-1));
    //     return $fact;
        return ($n * fact_rec($n - 1 ));
    }
}

echo fact_rec(5);

// function facto($number) {

//     if ($number < 2) {
//         return 1;
//     } else {
//         return ($number * facto($number-1));
//     }
// }

// echo facto(3);
