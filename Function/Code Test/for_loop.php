<?php
/*echo "1 to 10 print:";
echo PHP_EOL;
for($i = 0; $i<=10; $i++){
    echo $i."\n";
}*/
?>
<?php
/*echo "1 to 100 summation:";
echo PHP_EOL;
$sum = 0;
for($i = 0; $i <= 100; $i++){
    $sum += $i;
}
echo "The summation of 1 to 100 is ".$sum; 
*/
?>
<?php
/*echo "1 to 100 even number print:\n";
for($i=0; $i<=100; $i++){
    if($i%2==0 && $i!=0){
        echo $i."\n";
    }
}*/
?>
<?php 
/*echo "1 to 100 odd number print: \n";
for($i=0; $i<=100; $i++){
    if($i%2 != 0){
        echo $i."\n";
    }
}*/
?>
<?php 
/*echo "1 to 100 even number summation: \n";
$sum = 0;
for($i=0; $i<=100; $i++){
    if($i%2 == 0){
        $sum += $i;
    }
}
echo $sum."\n";
*/
?>
<?php 
/*
echo "1 to 100 odd number summation: \n";
$sum = 0;
for($i=1; $i<=100; $i += 2){
    $sum += $i;
}
echo $sum."\n";
*/
?>
<?php

$factorial = 1;
$i = 5 ;
    for($n = $i; $n>1; $n--){
        $factorial *= $n;    
    }

echo $factorial;

?>

<?php
$count = 0;
for($i=3; $i<= 100; $i++){
    for($j=$i; $j<=$i; $j++){
        if($i%$j == 0){
            $count++;
            if($count == 2){
                echo $i;
            }
            
        }
    }
    
}
