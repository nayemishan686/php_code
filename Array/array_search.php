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
    'i' => 22,
    'c' => 12,
    'h' => 42,
    'e' => 32,
     12 => '62'
];
$offset = array_search('Coconut',$fruits);
print_r($offset);
echo PHP_EOL;

//another way 
if(in_array(62, $random, true)){
    echo"yes i got it";
}
echo PHP_EOL;

//for key searching
if(key_exists('a', $random)){
    echo"yeah!!!";
}