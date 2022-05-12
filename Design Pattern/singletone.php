<?php
//singletone
class SingleTone {
    static $instanceof;
    private $name;
    function __construct($name) {
        $this->name = $name;
    }

    static function getInstance($name) {
        if (!self::$instanceof) {
            if ($name) {
                self::$instanceof = new SingleTone($name);
            } else {
                self::$instanceof = new SingleTone('');
            }
            echo "New instance created\n";
        } else {
            echo "Old instance supplied\n";
        }
        return self::$instanceof;
    }

    function sayName() {
        return $this->name."\n";
    }
}

$sc1 = SingleTone::getInstance('Nayem');
$sc2 = SingleTone::getInstance('Hossain');
$sc3 = SingleTone::getInstance('Ishan');

echo $sc1->sayName();
echo $sc2->sayName();
echo $sc3->sayName();