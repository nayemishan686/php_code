<?php 
class MotorCycle{
    private $parameters;
    function __construct($displacement, $capacity, $mileage) {
        $this->parameters = array();
        $this->parameters['displacement'] = $displacement;
        $this->parameters['capacity'] = $capacity;
        $this->parameters['mileage'] = $mileage;
    }

    //for operator overloading
    function __isset($name) {
        if(!isset($this->parameters[$name])){
            echo $this->parameters[$name]." is not found\n";
            return false;
        }
        return true;
    }

    function __unset($name) {
        print_r($this->parameters);
        unset($this->parameters[$name]);
        print_r($this->parameters);
    }
    function __get($name) {
        echo $this->parameters[$name];
    }

    function __set($name, $value) {
        $this->parameters[$name] = $value;
    }

    //For method overloading
    function __call($name, $argument) {
        if('first' == $name){
            if($argument){
                echo "I am First student in feni polytechnic institute. My roll is " . $argument[0].'.';
            }else{
            echo "I am First student in feni polytechnic institute";
            }
        }
    }
}

$Yamaha = new MotorCycle('160cc', '12ltr', '45Km/ph');

if(isset($Yamaha->mileage)){
    echo "found\n";
    $Yamaha->mileage;
}else{
    echo "not found\n";
}

unset($Yamaha->mileage);

$Yamaha->first(940191);