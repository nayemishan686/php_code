<?php 
    date_default_timezone_set('Asia/Dhaka');
    //now we will learn date format
    echo date("d-m-y"); //to see 21-02-22
    echo PHP_EOL;
    echo date("D-M-Y"); //to see Mon-Feb-2022
    echo PHP_EOL;
    echo date("dS-M-Y"); //to see 21st-Feb-2022
    echo PHP_EOL;
    echo date("d-F-Y"); //to see 21-February-2022
    echo PHP_EOL;
    echo date("d-F-Y h:i:s"); //to see 21-February-2022 12:35:53 device time formate
    echo PHP_EOL;
    echo date("z"); //which number of day today 
    echo PHP_EOL;
    echo date("t"); //How many day has in this month
    echo PHP_EOL;
    echo date(("dS F Y h:i:s"),time()+12*60*60); //to add extra time with this day snd show output

?>