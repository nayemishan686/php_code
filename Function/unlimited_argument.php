<?php
// Now we will show how to pass unlimited argument
function sumUnlimited(int ...$n):int{
    $summation = 0;
    for($i=0;$i<count($n);$i++){
        $summation += $n[$i];
    }
    return $summation;
}

echo sumUnlimited(5,6,7,8,9,6,9);