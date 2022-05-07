<?php 
function customErrorHandler($severity, $message,$file,$line){
    echo "Error [{$severity}] : {$message} in {$file} on this {$line} line";
}

//set_error_handler('customErrorHandler');
//echo substr([1,2,3,4],3);

function devisionsHandler($division, $divisor){
    if(0 == $divisor){
        trigger_error("This is not a valid divisor");
    }else{
        echo $division/$divisor;
    }
}

devisionsHandler(10,0);