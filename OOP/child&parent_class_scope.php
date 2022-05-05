<?php 
    class ParentClass {
        protected $name;
        public function __construct($name){
            $this->name = $name;
        }
        public function sayHi(){
            echo "Hello from {$this->name}\n";
        }
    }
    class ChildClass extends ParentClass{
        public function sayHi(){
            parent::sayHi();
            echo "Hi from {$this->name}\n";
        }
    }
    $obj = new childclass("Ishan");
    $obj -> sayHi();