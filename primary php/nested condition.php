<?php

//Nested if else statement

$condition1 = true;
$condition2 = true;
$condition3 = true;

if($condition1){
    if($condition2){
        if($condition3){
            echo "Three condition is true";
        }else{
            echo "First two condition is true";
        }
    }else{
        echo "Only first condition is true";
    }
}else{
    echo "No condition is true";
}

echo PHP_EOL;
//Normally it can difines

if($condition1 && $condition2 && $condition3){
    echo "Three condition is true";
}elseif($condition1 && $condition2){
    echo "First two condition is true";
}elseif($condition1){
    echo "Only first codition is true";
}else{
    echo "All condition is false";
}

//Factorial Number

$number = 5;
for($i = $number, $factorial = 1; $i > 1; $i++){
    $factorial = $factorial*$i;
}
echo $factorial;
printf("factorial of %d is %d", $number,$factorial);