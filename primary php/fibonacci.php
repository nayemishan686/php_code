<?php
//0 1 1 2 3 5 8 13 21 34 55 89......

$firstNumber = 0;
$secondNumber = 1;
$newNumber = 1;

for($i=0; $i<10; $i++){
    echo $firstNumber."\n";
    $secondNumber = $newNumber;
    $newNumber = $firstNumber + $secondNumber;
    $firstNumber = $secondNumber;
    
}