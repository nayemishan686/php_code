<?php
//Even Check
include_once "function_code.php";
$x = 5;
if(isEven($x)){
    echo "$x is Even number";
}else{
    echo "$x is Odd number";
}

echo PHP_EOL;
//Factorial check using type hinting
echo "Factorial of {$x} is ".factorialTypeHintingCheck($x);

echo PHP_EOL;
//Factorial check using type hinting
echo "Factorial of {$x} is ".factorialTypeCheck($x);