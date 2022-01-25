<?php
/*
 This function is define for checking Even or Odd number
 we can also write is like this:
 if($n%2==0){
        return true;
    }
        return false;

because একবার রিটার্ন কল হলে পরের কোড রান হয়না 
*/
function isEven($n){
    if($n%2==0){
        return true;
    }else{
        return false;
    }
}

/* 
This function use for showing output any kind of factorial
there we use type hinting so that it can show error if our type not match
it's use for PHP7
*/
function factorialTypeHintingCheck(int $n){
    $factorial = 1;
    for($i=$n; $i>1; $i--){
        $factorial *= $i;
    }
    return $factorial;
}

/* 
This function use for showing output any kind of factorial
there we use type check so that it can show error if our type not match
it's use for < PHP7
*/
function factorialTypeCheck($n){
    if(gettype($n)!="integer"){
        return "invalid";
    }
    $factorial = 1;
    for($i=$n; $i>1; $i--){
        $factorial *= $i;
    }
    return $factorial;
}