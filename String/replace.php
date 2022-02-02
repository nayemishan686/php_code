<?php 
    //str_replace && str_ireplace used to replace the word with some string
    $data = "Quick Brown fox jumps over the lazy dog";
    //str_replace () used to case sensitive replacement
    $replace1 = str_replace("fox", "tiger", $data);
    echo $replace1;
    echo PHP_EOL;


    //You can many characters wirh mane word at at a time
    $replace2 = str_replace([ "fox", "jumps"],["Tiger", "Eat"], $data);
    echo $replace2;
    echo PHP_EOL;

    //str_ireplace used to case insensitively replacement
    $replace3 = str_ireplace("Fox", "Lion", $data);
    echo $replace3 ;
    echo PHP_EOL;
    
    //You can replace many characters wirh mane word at a time by using it
    $replace4 = str_ireplace([ "fox", "brown", "jumps"],["Lion", "Eat", "Tiger"], $data);
    echo $replace4;




?>