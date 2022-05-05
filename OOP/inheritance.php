<?php 
class Animal{
    protected function greeting(){
    
    }
    public function eat(){
        echo "I am eating\n";
    }
    public function sleep(){
        echo "I am sleeping\n";
    }
    public function run(){
        echo "I am running\n";
    }
}
class Man extends Animal{
    public function greeting(){
        echo "Assalamualaikum\n";
    }
}
class Cat extends Animal{
    public function greeting(){ 
        echo "Meowah\n";
    }
}

$manObj = new Man();
$manObj -> greeting();
$manObj -> sleep();

$catObj = new Cat(); 
$catObj -> greeting();
$catObj -> eat();