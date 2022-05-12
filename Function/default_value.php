<?php
/*
This function has default value so that it show it's default output when we can't input any argument
*/

function whatWeServe($foodItems="1 Cup",$foodTypes="Tea"){
    echo "{$foodItems} of {$foodTypes} Has been served";
}
whatWeServe("3 cup", "Coffee");
