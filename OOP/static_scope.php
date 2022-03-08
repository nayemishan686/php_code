<?php 
class A{
    protected static $name;
    static function sayHi(){
        self::$name = "Nayem Hossain\n";
        echo "Hi from ".self::$name;
    }
}

class B extends A{
    static function sayHi(){
        self::$name = "Nayem Hossain Ishan\n";
        echo "Hello from ".self::$name;
        parent::sayHi();
    }
}

$obj1 = new B();

B::sayHi();