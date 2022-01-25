<?php
//Generally we use this to check data in variable
$name = null;
if(isset($name)){
    echo "name is set";
}else{
    echo "name is not set";
}
echo PHP_EOL;

//empty check 
if(empty($name)){
    echo "name is empty";
}else{
    echo "not empty";
}
echo PHP_EOL;

//Best way to check empty
if(isset($name) && (is_numeric($name) || $name != '')){
    echo "Name is set and not empty";
}else{
    echo "Name is not set or empty";
}