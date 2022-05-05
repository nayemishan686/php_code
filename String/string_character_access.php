<?php 
    $first = "My name is nayem hossain ishan";
    echo $first[0]; // to print single index value
    echo PHP_EOL;
    $checkLength = strlen($first); //to check string length
    echo $checkLength;
    echo PHP_EOL;
    //print $first by for loop
    for($i = 0; $i < $checkLength; $i++){
        $originalSentece = $first[$i];
        echo $originalSentece;
    }
    echo PHP_EOL;
    //substr(); use to return a part of the string
    $return = substr($first, 10, -6); //
    echo $return;



?>