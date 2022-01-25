<?php
$number = 13;
if($number%2 == 0){
    echo "Even Number";
}else{
    echo "Odd Number";
}
echo PHP_EOL;

switch($number%2){
    case 0:
        echo "Even Number";
        break;
    default:
        case "Odd Number";
        break;
}
echo PHP_EOL;
?>

Alternative Syntax:

<?php

if($number%2 == 0):
    echo "Even Number";
else:
    echo "Odd Number";
endif;

echo PHP_EOL;

switch($number%2):
    case 0:
        echo "Even Number";
        break;
    default:
        echo "Odd Number";
        break;
    endswitch;
echo PHP_EOL;

if($number%2 == 0):
    ?>
Even Number
    <?php
    else:
    ?>
Odd Number;
    <?php
    endif;