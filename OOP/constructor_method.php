<?php 

class Nayem{
    public $name;
    public $age;
    public function __construct($userName, $userAge = 0){
        $this->name = $userName;
        $this->age = $userAge;
    }
    public function getName(){
        echo "Assalamualaikum\n";
        $this-> getDeatails();
        
    }
    public function getDeatails(){
        echo "My Name is ".$this->name ." .I am ".$this->age." Years old";
    }
}

$obj1 = new Nayem("Nayem");
$obj1->getName();