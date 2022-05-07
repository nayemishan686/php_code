<?php
function a($x){
    b($x);
}

function b($y){
    c($y*3);
}

function c($z){
    if($z <= 20){
        trigger_error("c is too small\n");
    }else{
        echo "c is ok\n";
    }

    debug_print_backtrace();
    //print_r(debug_backtrace());
}

function d($e, $f){
    a($e + $f);
}

d(10,20);