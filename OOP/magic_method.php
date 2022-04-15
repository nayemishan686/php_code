<?php 
//You can call any function or method by magic method 

//Normal way
class Student{
    private $name;
    private $age;
    private $class;

    public function __construct($name="", $age="", $class=""){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }

    public function getClass(){
        return $this->class;
    }

    public function setClass($class){
        $this->class = $class;
    }
}

$object = new Student();

$object->setName("Nayem\n");
echo $object->getName();

$object->setAge(22);
echo $object->getAge();
echo PHP_EOL;

$object->setClass("Diploma Last Year");
echo $object->getClass();
echo PHP_EOL;
echo PHP_EOL;

//Magic Method way
class Students{
    private $name;
    private $age;
    private $class;

    public function __construct($name="", $age="", $class=""){
        $this->name = $name;
        $this->age = $age;
        $this->class = $class;
    }

    public function __get($property){
        return $this->$property;
    }

    public function __set($property, $value){
        $this->$property = $value;
    }
}

$obj = new Students();

$obj->name = "Nayem Ishan";
echo $obj->name;
echo PHP_EOL;

$obj->age = 22;
echo $obj->age;
echo PHP_EOL;

$obj->class = "DIploma Last Year";
echo $obj->class;