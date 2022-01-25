<?php
//Generally it used to modified orginal array and take them another variable
/*the main difference between array_slice & array_splice is that. array_slice don't modified main array and just create a new array. on the other hand array_splice modified main array and also create a new array*/
$fruits = [
    'Apple',
    'Banana',
    'Orange',
    'Coconut',
    'Mango',
    'Lemon'
];
$random = [
    'a' => 12,
    'b' => 22,
    'c' => 32,
    'd' => 42,
    'e' => 52,
     12 => 62
];
$rmfruits = array_splice($fruits, 2, 5);
print_r($rmfruits);
print_r($fruits);

$rmrandom = array_splice($random, 2,-1);
print_r($rmrandom);
print_r($random);