<?php 
    //Unix epoc(It means When time was started .Unix time epoch is 1st january 1970)
    //Unix timestamps means total how many second has passed since Unix epoch to now
    
    echo time();
    echo PHP_EOL;

    //You can see microtime using the following formula
    echo microtime(true);
    echo PHP_EOL;

    //You can also define how many digit you want to see after dots
    $microtime = microtime(true);
    printf("%10.18f",$microtime);
    echo PHP_EOL;

    //you cas see today date by using the following formula
    echo date('d/m/y');
    echo PHP_EOL;

    //You can see how many time you cost for your programme using the following formula
    //its called brancmarking
    
    function factorial($n){
        $result = 1;
        for($i=$n ;$i>=1; $i--){
            $result *= $i;
        }
        return $result;
    }
    $starttime = microtime(true);
    factorial(10);
    $endtime = microtime(true);
    $total = $endtime - $starttime;
    echo $total;
    echo PHP_EOL;

?>