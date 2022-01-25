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
     12 => 62
];
$number = array(2,33,5,22,44,3,66,555,222);


//sort() = sort arrays in ascending order
sort($fruits);
print_r($fruits);

//rsort() = sort arrays in descending order
rsort($fruits);
print_r($fruits);

//asort() =  sort associative arrays in ascending order, according to the value and preserve key
asort($random);
print_r($random);

//asort() =  sort associative arrays in descending order, according to the value and preserve key
arsort($random);
print_r($random);

//ksort() =  sort associative arrays in ascending order, according to the key
ksort($random);
print_r($random);

//ksort() =  sort associative arrays in descendong order, according to the key
krsort($random);
print_r($random);

//foreach loop after asort sorting
asort($number);
print_r($number);

// for($i = 0; $i < count($number); $i++){
//     echo $number[$i]."\n";
// } can use in sort()

foreach($number as $new){
    echo $new."\n";
}

//sort using STRING
sort($number, SORT_STRING);
print_r($number);

//sort in case-insansitive form
$fruits1 = [
    'Apple',
    'apple',
    'mango',
    'Coconut',
    'Mango',
    'Lemon'
];
sort($fruits1, SORT_STRING | SORT_FLAG_CASE);
print_r($fruits1);
