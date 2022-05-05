<?php 
    $data = "Hey Bro, How are you?";
    //This function use to reverse data
    $reverse_data = strrev($data);
    echo $reverse_data;
    echo PHP_EOL;
    
    //We can do reverse data by for loop using ascending 
    $length = strlen($data);
    for($i = 1; $i <= $length; $i++){
        $mdata = $data[$i*-1];
        echo $mdata;
    }
    echo PHP_EOL;

    //We can do reverse data by for loop using descending
    for($i = $length-1; $i >= 0; $i--){
        $oData = $data[$i];
        echo $oData;
    }

?>