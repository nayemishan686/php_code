<?php
$numbers = array();
for($i = 12; $i<=21; $i++){
    array_push($numbers, $i);
}
print_r($numbers);

//make it by using range() function
$numbers = range(12,21);
print_r($numbers);

//stepping 2
$step2 = range(30,45,2);
print_r($step2);

//using foreach
foreach(range(0, 90, 11) as $new){
    if($new > 22){
        echo $new."\n";
    }
}