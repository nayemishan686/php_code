<?php

//Print 1-10

// for($i = 0; $i <= 10; $i++){
//     echo $i;
//     echo PHP_EOL;
// }

// echo PHP_EOL;
// //Multiple Steping
// //Print 10-1 and 1-10 both

// for($i = 10, $j = 1; $i > 0; $i--, $j++){
//     echo $i.":".$j;
//     echo PHP_EOL;
// }
// echo PHP_EOL;

//Factorial Number

$n = 3;
$factorial = 1;
for($i = $n; $i>=1; $i--){
    $factorial *= $i;
}
echo "The factorial of {$n} is {$factorial}";

