<?php
class SingleToneMore {
    static $instanceof = [];
    private $name;

    function __construct($name) {
        $this->name = $name;
    }

    static function getInstance($name){
        if(!isset(self::$instanceof[$name])){
            self::$instanceof[$name] = new SingleToneMore($name);
        }
        return self::$instanceof[$name];
    }

    function sayName() {
        return $this->name."\n";
    }
}

$sc1 = SingleToneMore::getInstance("nayem");
$sc2 = SingleToneMore::getInstance("Hossain");
$sc3 = SingleToneMore::getInstance("Ishan");

echo $sc1->sayName();
echo $sc2->sayName();
echo $sc3->sayName();