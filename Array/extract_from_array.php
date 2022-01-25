<?php
/* in this file we will discuss about array_slice() function . It is used for extracting data from array
    array_slice($variable_name, start, length, preserve)
*/
// Extract from index array
$fruits = [
    'Apple',
    'Banana',
    'Orange',
    'Coconut',
    'Mange',
    'Lemon'
];


$extract_fruit = array_slice($fruits, 2,null,true);
print_r($extract_fruit);

// Extract from index array
$random = [
    'a' => 12,
    'b' => 22,
    'c' => 32,
     12 => 42,
    'e' => 52,
];
$extract_random = array_slice($random, 2, -1, true);
print_r($extract_random);