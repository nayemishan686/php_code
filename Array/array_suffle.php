<?php
$numbers = range(40,72);
shuffle($numbers);
print_r($numbers);

$third = $numbers[3];
//echo $third;
echo PHP_EOL;

//aonther way by using mt_rand function
$randomly = mt_rand(0, 32);
print_r($randomly);
echo PHP_EOL;
//toss system using this function
$toss = $numbers[$randomly];
if($toss %2 == 0){
    echo "Head";
}else{
    echo "Tail";
}