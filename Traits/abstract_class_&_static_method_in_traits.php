<?php 
trait MyClass{
    static $number;
    abstract function sayHi();
}

class First{
    use MyClass;
    function sayHi() {
        echo "Hello, I am Nayem";
    }
}

class Second{
    use MyClass;
    function sayHi() {
        echo "Hello, I am Ishan";
    }
}
//one way to declare a static properties
First::$number = 940191;
echo First::$number;
echo PHP_EOL;

//Another way to declare a static properties
$obj = new First();
echo $obj::$number;
echo PHP_EOL;

//When we want to use a static property with all class. Then we need to declare a static property in all classes
second::$number = 859909;
echo Second::$number;