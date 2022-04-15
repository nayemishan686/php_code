<?php 
class DistrictCollection implements IteratorAggregate,Countable{
    private $districts;
    function __construct($districts=""){
        $this->districts = array();
    }

    function add($districts){
        array_push($this->districts,$districts);
    }

    function getIterator(){
        return new ArrayIterator($this->districts);
    }

    function count(){
        return count($this->districts);
    }
}

$districts = new DistrictCollection();
$districts->add("Lakshmipur");
$districts->add("Dhaka");
$districts->add("Feni");
$districts->add("Chittagoang");
$districts->add("Shylet");

foreach($districts as $district){
    echo $district."\n";
}
echo PHP_EOL;

echo count($districts);