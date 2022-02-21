<?php 
    //to see how many second has passed from unic epoch
    echo time();
    echo PHP_EOL;
    echo strtotime("now");
    echo PHP_EOL;
    echo mktime(0,0,0,12,12,1980);
    echo PHP_EOL;
    echo strtotime("12 December, 1980");
    echo PHP_EOL;
    echo strtotime("+7days");
    echo PHP_EOL;

    //date diff
    $firstTime = strtotime("+2 weeks 4days 24hour 86400seconds");
    $lastTIme = strtotime("now");
    echo ($firstTime - $lastTIme)/86400;
    echo PHP_EOL;

    //date diff function use
    $d1 = new DateTime("22-01-2001");
    $d2 = new DateTime("21-02-2022");
    $dateDiff = $d1->diff($d2);
    echo $dateDiff->format('%y Year %m Month %d Day');



?>