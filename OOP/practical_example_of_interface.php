<?php 
class DistrictCollection implements IteratorAggregate{
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
}

$districts = new DistrictCollection();
$districts->add("Lakshmipur");
$districts->add("Dhaka");
$districts->add("Feni");
$districts->add("Chittagoang");

foreach($districts as $district){
    echo $district."\n";
}