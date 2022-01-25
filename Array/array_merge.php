<?php
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
$new_fruit1 = array_slice($fruits,1, 2, true);
$new_fruit2 = array_slice($fruits, 3, null, true);
$new_fruit = array_merge($new_fruit1, $new_fruit2);
print_r($new_fruit);

//another way
$new_random1 = array_slice($random, 1, 3, true);
$new_random2 = array_slice($random, 4, null, true);
$new_random = $new_random1 + $new_random2;
print_r($new_random);