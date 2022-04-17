<?php
class MotorCycle{
    private $parameters;
    function __construct($displacement, $mileage, $capacity){
        $this->parameters = array();
        $this->parameters['displacement'] = $displacement;
        $this->parameters['mileage'] = $mileage;
        $this->parameters['capacity'] = $capacity;
    }

    function __isset($name) {
        if(!isset($this->parameters[$name])){
            echo "{$name} is not found\n";
            return false;
        }
        return true;
    }

    function __unset($name) {
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }
    function __get($name){
        echo $this->parameters[$name];
    }

    function __set($name, $value){
        $this->parameters[$name] = $value;
    }
}

$R15V3 = new MotorCycle("150cc", "22ltr", "42km/ph");

if(isset($R15V3->tiresize)){
    echo "Found\n";
}else{
    echo "Not Found\n";
}

unset($R15V3->displacement);
