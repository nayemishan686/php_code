<?php
//if code has any bug that will show after complete code
register_shutdown_function('fatalErrorHandler');

function fatalErrorHandler() {
    $error = error_get_last();
    if($error){
        echo "fatal error";
    }
}

echo $hello;