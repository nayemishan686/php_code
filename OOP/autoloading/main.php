<?php 
function autoload($name) {
    include strtolower("{$name}.php");
}

spl_autoload_register("autoload");
(new Bike)-> myBike();
echo PHP_EOL;
(new Car)-> myCar();
echo PHP_EOL;
(new Cycle)-> myCycle();