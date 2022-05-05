<?php 
    $data = "Quick Brown fox jumps fox over the lazy dog";

    //To check sting position case sensitivly you can use the following function
    //It ca found data when it will fully match and it search from left side
    $position1 = strpos($data, "Brown", 0/*it is used to make which condition he will start searching*/);
    echo $position1;
    echo PHP_EOL;

    //To check string position case insensitivity you can use the following function
    //It ca found data case insensitively and it search from left side
    $position2 = stripos($data, "brown");
    echo $position2;
    echo PHP_EOL;
    
    //to check string position case sensitivity you can use the following function
    //it ca found data when it will fully match and it search from right side
    $position3 = strrpos($data, "fox");
    echo $position3;
    echo PHP_EOL;

    //to check string position case insensitively you can use the following function
    //it can found data case insensitively  and it search from right side
    $position4 = strripos($data, "Fox");
    echo $position4;
    
?>