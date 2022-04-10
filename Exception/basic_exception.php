<?php
class FirstExeption { 
    function __construct($name, $age){
        $this->name = $name;
        if($age < 21){
            throw new Exception ("Invalid age", 404);
        }
        $this->age = $age;
    }
}

try{
    $obj = new FirstExeption("Nayem", 22);
}catch(Exception $e){
    echo $e->getCode() ." : ". $e->getMessage();
}



?>