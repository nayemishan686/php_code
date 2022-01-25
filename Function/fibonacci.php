<?php
function fibonacci($very_old, $old, $start, $end){
    if($start>$end){
        return;
    }
    $start++;

    echo $very_old,"\n";
    $temp = $very_old + $old;
    $very_old = $old;
    $old = $temp;

    fibonacci($very_old,$old,$start,$end);

}



fibonacci(0,1,1,10);