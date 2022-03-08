<?php 
class ParentClass{
    static function sayHi(){
        echo "Hello I am Nayem Hossain\n";
    }
}

class ChildClass extends ParentClass{
    static function sayHi(){
        echo "Hello I am Nayem Hossain Ishan\n"; 
        parent::sayHi();
    }
}

ChildClass::sayHi();