<?php
/*Comparison Operator
(==,===,!=,>,<,>=,<=)
*/
$nayem = 100;
$ishan = 100;
if($nayem == $ishan){
    echo "Nayem has same money of Ishan";
}elseif($nayem > $ishan){
    echo "Nayem has more money than Ishan";
}elseif($nayem < $ishan){
    echo "Nayem has less money than Ishan";
}else{
    echo "We can't find";
}
echo PHP_EOL;

//Muslim or Non-Muslim check
$creator = "Allah";
if("Allah" == $creator){
    echo "You are Muslim";
}
echo PHP_EOL;


//Big number between two number
$number1 = 15;
$number2 = 14;
if($number1 > $number2){
    echo "$number1 is bigger than $number2";
}
elseif($number2 > $number1){
    echo " $number2 is bigger than $number1 ";
}
else{
    echo "$number1 & $number2 is same value";
}
echo PHP_EOL;


//Teenager Check
$ratulAge = 16;
if($ratulAge >= 13 && $ratulAge <= 18){
    echo "Ratul is a teenager";
}else{
    echo "Ratul is not teenager";
}
echo PHP_EOL;

//Voter Check
$age = 21;
if($age >= 18 ){
    echo"He is a voter";
}
else{
    echo "he is not voter";
}
echo PHP_EOL;


//Grade Point Check
$marks = 80;
if($marks >= 80){
    echo "You get GPA A+";
}elseif($marks >= 70){
    echo "You get GPA A";
}elseif($marks >= 60){
    echo "You get GPA A-";
}elseif($marks >= 50){
    echo "You get GPA B";
}elseif($marks >= 40){
    echo "You get GPA C";
}else{
    echo " You are fail";
}

echo PHP_EOL;

//Beef Price 
//If,If...else,If...elseif

/********************
 ******* if *********
 *******************/

 $priceOfBeef = 100;
 if($priceOfBeef == 100){
     echo "Buy 2kg beef";
 }
echo PHP_EOL;
/********************
 ***** if...else ****
 *******************/

$priceOfBeef = 120;
if($priceOfBeef <= 100){
    echo "Buy 2kg beef";
}else{
    echo "Don't Need to buy";
}
echo PHP_EOL;
/********************
 *** if...elseif ****
 *******************/

$priceOfBeef = 150;
if($priceOfBeef <= 100){
    echo "You can Buy 2kg beef";
}elseif($priceOfBeef <= 120){
    echo "You can buy 1.5kg beef";
}elseif($priceOfBeef <= 150){
    echo "You can buy 1 kg beef";
}else{
    echo "Don't need to buy";
}
echo PHP_EOL;



















/********************
 ***** switch ******
 *******************/

$priceOfBeef = 130;
switch($priceOfBeef){

    case 100:
        echo "You can buy 2kg beef";
        break;

    case 120:
        echo "You can buy 1`kg beef";
        break;

    case 130:
        echo "You can buy 500gm beef";
        break;

    default:
        "Don't Buy beef. Because it's price is $priceOfBeef";
    break;
}








































