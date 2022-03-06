<?php
class Polytechnic{
    public $student;
    function __construct($initialStudent){
        $this -> student = $initialStudent;
    }

    public function firstSemester($newStudent){
        $this -> student += $newStudent;
    }

    public function thirdSemester($newStudent){
        $this -> student += $newStudent;
    }

    public function fifthSemester($newStudent){
        $this -> student += $newStudent;
    }
    
    public function seventhSemester($newStudent){
        $this -> student += $newStudent;
    }

    public function total(){
        echo "Total students in this polytechnic is ". $this -> student;
    }
}

$polytechnic = new Polytechnic(0);
$polytechnic -> total();
echo PHP_EOL;

$polytechnic -> firstSemester(100);
$polytechnic-> total(); 
echo PHP_EOL;

$polytechnic -> thirdSemester(91);
$polytechnic -> total();
echo PHP_EOL;

$polytechnic -> fifthSemester(78);
$polytechnic -> total();
echo PHP_EOL;

$polytechnic -> seventhSemester(67);
$polytechnic -> total();
echo PHP_EOL;


