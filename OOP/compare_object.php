<?php 
class Planet{
    public $name;
    function __construct($name){
        $this->name = $name;
    }
}

$obj1 = new Planet("Earth");
$obj2 = clone $obj1;

if($obj1 === $obj2){
    echo "similar planet";
}else{
    echo "different planet";
}
