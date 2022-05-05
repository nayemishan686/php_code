<?php 

class MethodCalculator{
    private $number;
    static $name;
    static function fibonacci($n){
        self::$name = "Nayem Hossain\n";
        echo "The fibonacci of {$n} is upto {$n}\n";
        self::viewDetails();
    }

    static function viewDetails(){
        echo "Do Something\n";
    }

    function factorial($n){
        $this->viewDetails();
        echo $this->number = $n;
        self::$name = "Nayem Hossain Ishan\n";
    }
}

$obj1 = new MethodCalculator();
$obj1 -> fibonacci(8);
MethodCalculator::fibonacci(8);
echo MethodCalculator::$name;


$obj1->factorial(7);
echo PHP_EOL;
echo MethodCalculator::$name;