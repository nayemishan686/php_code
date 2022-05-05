<?php 
//you cannot declare abstruct class as a object. at means you can't call it
//You can extend abstract class
//When you use abstract class you must declare abstract method how they was in abstract class

abstract class Shape{
    abstract function getArea();
    abstract function getPerimeter();
}

class Rectangle extends Shape{
    private $base,$height;
    public function __construct($height, $base){
        $this->height = $height;
        $this->base = $base;
    }

    public function setHeight($height){
        $this->height = $height;
    }

    public function setBase($base){
        $this->base = $base;
    }

    public function getArea(){
        return $this->height * $this->base;
    }
    function getPerimeter(){
        return (2*($this->height + $this->base));
    }

}

class Triangle extends Shape{
    private $base, $height;

    public function __construct($base,$height){
        $this->base = $base;
        $this->height = $height;
    }
    function setBase($base){
        $this->base = $base;
    }
    function setHeight($height){
        $this->height = $height;
    }
    public function getArea(){
        return ($this->base * $this->height)/2;
    }
    function getPerimeter(){}
    

}

$getRectangle = new Rectangle(91,9);
echo $getRectangle->getArea();
echo PHP_EOL;
echo $getRectangle->getPerimeter();
echo PHP_EOL;

$getTriangle = new Triangle(20,10);
echo $getTriangle->getArea();
echo PHP_EOL;


//another one
abstract class OurClass{
    function sayHi() {
        echo "Hi I am Nayem";
    }
    abstract function eat($a, $b, $c);
}

class Second extends OurClass{
    function eat($x,$y,$z){
        echo "Hey bro";
    }
}

$obj = new Second();
$obj->sayHi();
echo PHP_EOL;
$obj->eat(4,5,6);