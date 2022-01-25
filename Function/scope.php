Global scope:
<?php
$name = "Earth";
function doSomething(){
    global $name; //Global Scope
    echo $name;
    //echo $GLOBALS['name'];
}
doSomething();
echo PHP_EOL;
?>

Local Scope:
<?php
    function localScope(){
        $myName = "My name is nayem";
        echo $myName; //Local scope
    }
    localScope();
    echo PHP_EOL;
?>

Static Scope:
<?php
function staticScope(){
    static $i; //Local Scope
    $i = $i ?? 0;
    echo $i++."\n";
    return $i;
}
staticScope();
staticScope();
staticScope();
staticScope();