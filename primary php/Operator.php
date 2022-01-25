<?php
/*PHP has various type of operator these are:
Arithmetic Operator
Assignment Operator
Increment & Decrement Operator
Comparison Operator
Logical Operator
String Operator
Array Operator
*/

//Arithmetic Operator
// ( + , - , * , / , % )

$number1 = 15;
$number2 = 5;
$number3 = $number1 + $number2;
$number4 = $number1 - $number2;
$number5 = $number1 * $number2;
$number6 = $number1 / $number2;
$number7 = $number1 % $number2;
echo "The summation of {$number1} & {$number2} is = {$number3} \n";
echo "The Subscription of {$number1} & {$number2} is = {$number4} \n";
echo "The multification of {$number1} & {$number2} is = {$number5}\n ";
echo "The Division of {$number1} & {$number2} is = {$number6} \n";
echo "The Modulous of {$number1} & {$number2} is = {$number7} \n";

//Assignment Operator
// ( = , += , -= , *= , /= , %= )
$aNumber1 = 12;
$aNumber2 = 3;
$aNumber3 = $aNumber1 + $aNumber2;
echo $aNumber3;
echo "\n";
$aNumber1 += 13;
echo $aNumber1;
echo"\n";
$aNumber1 -= 5;
echo $aNumber1;
echo"\n";
$aNumber1 *= $aNumber2;
echo $aNumber1;
echo"\n";
$aNumber1 /= $aNumber2;
echo $aNumber1;
echo"\n";
$aNumber1 %= $aNumber2;
echo $aNumber1;
echo"\n";

//Increment & Decrement Operator
// ( ++, -- )

$iNumber = 10;
$iNumber++;
echo $iNumber;
echo"\n";
$iNumber--;
echo $iNumber;
echo "\n";


$n = 4;
$m = $n++;
echo $m, "\n" ,$n;
echo "\n";
/*Note:
$m = $n++;
$m = $n;
$n = $n++;
*/

$a = 5;
$b = ++$a;
echo $b, "\n" ,$a;
/*Note:
$b = ++$a;
$a = $a + 1;
$b = $a;