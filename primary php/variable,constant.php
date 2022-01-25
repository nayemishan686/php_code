<?php

// we can change variable value
$task = "read";
echo $task;
echo "\n";
$task = "write";
echo $task;
echo "\n";

// How t define constant
define('PI', 3.15159);
echo PI;
echo "\n";
echo "the value of PI is = ".PI;
echo "\n";
echo constant ('PI'); 
echo PHP_EOL;
$constant = "constant";
echo "The value of PI is {$constant('PI')}";

//Single Line Comments
/*
multiple line comment
one line 
two line 
three line
*/


