<?php
namespace project;
include("c1.php");
include("c2.php");

use \project\MotorCycle\Bike as R15V3;
$obj = new bike\Bike();
$obj->sayHello();
echo PHP_EOL;

$obj2 = new motorCycle\Bike();
$obj2->sayHi();
echo PHP_EOL;

$obj3 = new R15V3();
$obj3->sayHi();