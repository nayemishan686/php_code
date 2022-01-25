<?php
//String to array
$vegetables =explode(', ',"Brinjal, Borocoll, Carrot"); 
print_r($vegetables);

//Array to string 
$arrayToString = join(', ', $vegetables);
echo $arrayToString;


//advance level
$vegetables =preg_split('/(, |,)/ ',"Brinjal, Borocoll, Carrot,potato"); 
print_r($vegetables);
echo count($vegetables);