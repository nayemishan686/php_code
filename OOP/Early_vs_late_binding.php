<?php
//self use for early binding
//static use for late binding
class Planet{
    static function echoName(){
        echo static::getName();
    }

    static function getName(){
        return "Earth";
    }
}

class Earth extends Planet{
    static function getName(){
        return "Bangladesh";
    }
}

Earth::echoName();