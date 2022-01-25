<?php
$x = 7;

if($x%2 == 0){
    echo "Even Number";
}else{
    echo "Odd number";
}
echo PHP_EOL;
//Ternary Operator
$result = ($x%2 == 0)? "Even Number" : "Odd Number";
echo $result;
echo PHP_EOL;
?>

2nd Number:
<?php

$x = 6;
$y = 5;

if($x > $y){
    echo "{$x} is Greater than {$y}";
}elseif($x < $y){
    echo "{$x} is smaller than {$y}";
}else{
    echo "{$x} is equal {$y}";
}

echo PHP_EOL;


//Ternary Operator

$smallerOrGreater = ($x > $y)? "{$x} is Greater than {$y}" : (($x < $y)? "{$x} is Smaller than {$y}" : "{$x} is equal {$y}"); 
echo $smallerOrGreater;