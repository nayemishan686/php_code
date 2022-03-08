<?php 
class Shape{

}
class Shapes{
    private $shape;
    function __construct() {
        $this->shape = array();
    }

    function addShape(Shape $shape){
        array_push($this->shape, $shape);
    }

    function totalShape(){
        return count($this->shape);
    }
}

class Rectangle extends Shape{

}
class Triangle extends Shape{

}
class Student{

}

$object = new Shapes();
$object -> addShape(new Rectangle);
$object -> addShape(new Triangle);
//$object -> addShape(new Student);
echo $object -> totalShape();
