<?php
//Variable Declare
$name = "Nayem";
$age = 21;
$homeTown = "Lakshmipur";
$position = "Web Developer";

echo "$name";
echo "\n";
// To add some variable
echo "My name is ".$name." I am ".$age." years old \n";

echo "My name is $name. i am $age years old. I am a $position. My hometown is $homeTown \n";

//ideal way to add more variable

echo "My name is {$name}. I am {$age} years old. I am a {$position}. My homedistrict is {$homeTown}";

