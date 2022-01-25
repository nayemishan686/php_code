<?php

//Variable Passing
$fName = "Nayem";
$mName = "Hossain";
$lName = "Ishan";

printf('My Full Name is %3$s %2$s %1$s',$lName , $mName , $fName);
echo "\n";

printf('The Binary %1$b equivalent of Decimal %1$d' ,12);
echo "\n";

$n = 45;
$m = 34.567;
printf('%05d',$n);
echo"\n";
printf('%.2f',$m);
echo "\n";

/* 
Now We will do sprintf
*/

$output = sprintf('The full name is %s %s %s',$fName,$mName,$lName);
echo $output;
