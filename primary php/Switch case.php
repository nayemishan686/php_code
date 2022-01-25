<?php

$result = 91;
switch($result){
    case $result > 80:
        echo "You have gotten A+";
        break;
    case $result > 70:
        echo "You have gotten A";
        break;
    case $result > 60:
        echo "You have gotten A-";
        break;
    case $result > 50:
        echo "You have gotten B";
        break;
    case $result > 40:
        echo "You have gotten C";
        break;
    default:
        echo "You have failed";
}
echo PHP_EOL;

$color = "blue";
switch($color){
    case "red":
        echo "Red is my favourite color";
        break;
    case "blue":
        echo "Blue is not my favourite color";
        break;
    case "Black":
        echo "Black is my favourite color";
        break;
    default:
        echo "This is not my favourite color";

}
echo PHP_EOL;



/********************
 * Nested Switch Case*
 ********************/


$number = 11;
$reminder = $number%2;

switch($reminder){
    case 0:
        switch($number){
            case $number>0:
                echo "{$number} is a Positive Even number";
                break;
            case $number<0:
                echo "{$number} is Negative Even Number";
        }
        break;
    default:
        switch($number){
            case $number>0:
                echo "{$number} is a positive odd number";
                break;
            case $number<0:
                echo "{$number} is a Negative odd number";
                break;
        }
}
?>

Another Way:
<?php
$n = 11;
$r = $n%2;
switch(true){
    case($r == 0 && $n >0):
        echo "{$n} is positive even number";
        break;
    case($r == 0 && $n < 0):
        echo "{$n} is negative even number";
        break;
    case($r == 1 && $n > 0):
        echo "{$n} is positive odd number";
        break;
    case($r == -1 && $n < 0):
        echo "{$n} is negative odd number";
}