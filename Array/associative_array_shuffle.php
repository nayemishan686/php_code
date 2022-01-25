<?php
$fruits = array('a' => 'array', 'b' => 'banana','c' => 'mango','d' => 'orange','e' => 'pineapple' );
//shuffle($fruits); //if we use it in asociative array we will loss key in this array
print_r($fruits);

//anohter way:
$key = array_rand($fruits);
echo $fruits[$key];


