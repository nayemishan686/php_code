<?php

class MainConcept{
    public $name;
    public $area;
    public function __construct($name){
        $this -> name = $name;
        $this -> calculateArea();
    }
    
    public function getArea(){
        echo "This {$this->name}'s area is {$this->area}\n";
    }
    public function calculateArea(){}
}

class Triangle extends MainConcept{
    private $a, $b, $c;
    public function __construct($a, $b, $c){
        $this -> a = $a;
        $this -> b = $b;
        $this -> c = $c;
        parent ::__construct("Triangle");
    }

    public function calculateArea(){
        $s = ($this->a + $this->b + $this->c) / 2;
        $this->area = sqrt($s*($s-$this->a)*($s-$this->b))*($s-$this->c);
    }
}

class Square extends MainConcept{
    private $a;
    public function __construct($a){
        $this->a = $a;
        parent ::__construct("Square");
    }
    
    public function calculateArea(){
        $this->area = ($this->a * $this->a);
    }

}

$obj = new Triangle(4,5,6);
$obj -> getArea();


$second = new Square(4);
$second -> getArea();

