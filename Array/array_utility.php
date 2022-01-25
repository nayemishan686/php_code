<?php
/*Today we eill discuss three function
1.array_walk()
2.array_map()
3.array_filter()
*/

$numbers = array(1,2,3,4,5,6,7,8,9,10);

//array_walk();
function square($n){
    printf("square of %d  is %d \n", $n, $n*$n);
}
array_walk($numbers, 'square');
echo PHP_EOL;

//array_map();
function cube($a){
    return $a*$a*$a;
}
$newArray = array_map('cube', $numbers);
print_r($newArray);

//array_filter
function even($n){
    return $n%2 == 0;
}
$search = array_filter($numbers, 'even');
print_r($search);


$person = array('sujon', 'kabir', 'sakil', 'sahed', 'mahir', 'shaki');
function sSearch($n){
    return $n[0] == 's';
}
$findStudent = array_filter($person, 'sSearch');
print_r($findStudent);


//array_reudce()
$numbers = array(1,2,3,4,5,6,7,8,9,10);
function summation($oldValue, $newValue){
    return $oldValue + $newValue;
}
$summation = array_reduce($numbers, 'summation');
echo $summation;
echo PHP_EOL;

function evenSum($oldValue, $newValue){
    if($newValue %2 == 0){
        return $oldValue + $newValue;
    }
    return $oldValue;
}
$evenSum = array_reduce($numbers, 'evenSum');
echo $evenSum;