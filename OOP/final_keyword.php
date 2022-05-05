<?php
//If you use final keyword before any function you can't override the function next time
abstract class First{
    final function First() {
        return "this class cannot override";
    }
}

class second extends First{
    //can't edit this
    // function First() {
    //     return "this  cannot override";
    // }
}
$object = new Second();
echo $object -> First();