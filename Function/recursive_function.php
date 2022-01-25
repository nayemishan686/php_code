<?php
/* Generally recursive function use for make simple any code
   We must give a condition for recursion
*/

function recursion($n){
    if($n>10){
        return;
    }
    echo $n."\n";
    $n++;
    recursion($n);
}

recursion(1);

echo "===========";
echo PHP_EOL;

function printNumber($start, $end, $stepping){
    if($start>$end){
        return;
    }
    echo $start."\n";
    $start += $stepping;
    printNumber($start, $end, $stepping);
}

printNumber(21,31,2);