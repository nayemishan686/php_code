<?php 
    interface BaseAnimal{
        function isAlive();
        function eat();
        function sayHi();
    }

    class Animal implements BaseAnimal{
        function isAlive(){}
        function eat(){}
        function sayHi(){
            echo "My name is Nayem";
        }
    }

    interface BaseHuman extends BaseAnimal{
        function sayName();
    }

    class Human implements BaseHuman{
        function sayName(){}
        function isAlive(){}
        function eat(){}
        function sayHi(){}
    }

    abstract class Rohingya implements BaseHuman{
        abstract public function sayCountry();
    }

    class BdRohingya extends Rohingya{
        function sayName(){}
        function isAlive(){}
        function eat(){}
        function sayHi(){}
        public function sayCountry(){}
    }

    $obj = new Animal();
    $obj->sayHi();

?>