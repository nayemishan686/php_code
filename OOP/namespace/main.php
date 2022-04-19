<?php
namespace vehicles;
include('cycle.php');
include('honda.php');
include('car.php');
$obj = new \vehicles\cycle\Cycle();//qualified name
$obj->cycleLove();

$obj1 = new \vehicles\honda\Honda();
$obj1->hondaLove();

$obj2 = new \vehicles\car\Car();
$obj2->carLove();
$obj2->hondaLove();