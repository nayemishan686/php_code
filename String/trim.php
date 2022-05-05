<?php 
    //trim use to delete white space in whole side
    $data = "   trim data    ";
    echo $data; 
    echo PHP_EOL;
    $triming = trim($data);
    echo $triming;
    echo PHP_EOL;

    //ltrim () use to delete white space from left side
    $data1 = " ltrim data ";
    echo $data1; 
    echo PHP_EOL;
    $ltriming = ltrim($data1);
    echo $ltriming;
    echo PHP_EOL;

    //rtrim () use to delete white space from right side
    $data2 = "  rtrim data  ";
    echo $data2; 
    echo PHP_EOL;
    $rtriming = rtrim($data2);
    echo $rtriming;

?>