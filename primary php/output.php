<?php
/* 
PHP has many data types:
Integer
Double
Boolean
Null
String
Array
Object
Resource
*/

$integer = 21;
$double = 22.34;
$unmarried = true;
$null = null;
$string = "Nayem Hossain";

var_dump($integer);
var_dump($double);
var_dump($unmarried);
var_dump($null);
var_dump($string);


//PHP has 2 way to show output

$name = "Nayem Hossain";
$age = 21;
$passion = "Web Developer";
//echo way
echo "My name is ".$name.". I am ".$age." years old. I am a ".$passion;
echo "\n";
echo "My name is $name. I am $age years old. I am a $passion \n";
echo "My name is {$name}. I am {$age} years old. I am a {$passion} \n";

//printf way
//printf("My name is %s I am %s years old I am a %s" $name,$age,$passion);
printf("My name is %s. I am %s years old. I am a %s." ,$name,$age,$passion);


