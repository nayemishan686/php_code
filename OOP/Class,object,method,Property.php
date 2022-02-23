<?php 

class Human{
    public $name;
    function sayHi() {
        echo "Assalamualaikum\n";
        $this->getName();
    }
    function getName() {
        echo $this->name;
    }
}
class Cat{
    function sayHi() {
        echo "Meowah\n";
    }
}
class Fox{
    function sayHi() {
        echo "Hukka Hua\n";
    }
}

$h1 = new Human();
$h1->name = "Nayem";//set
$h1->sayHi();
//echo $h1->name; //get
echo PHP_EOL;

$h2 = new Human();
$h2->name = "Qarin";
$h2->sayHi();
echo PHP_EOL;


$c1 = new Cat();
$c1->sayHi();
$f1 = new Fox();
$f1->sayHi();