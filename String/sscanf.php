<?php 
//sscanf(string,format,arg1,arg2,arg++)
//The sscanf() function parses input from a string according to a specified format. The sscanf() function parses a string into variables based on the format string. 
$name = "Nayem Hossain Ishan";
$part = sscanf($name, "%s %s %s");
print_r($part);

//You can use like this
$hexColor = "#FF2F44";
$divide = sscanf($hexColor, " #%2x %2x %2x ", $red, $green, $blue);
echo $blue; 


?>