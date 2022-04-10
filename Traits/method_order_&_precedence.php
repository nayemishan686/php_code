<?php
//in this programme that function will run which function was override in class. Because that class was instantiate traits. for this reason that function will be most priority
trait SeriesOne{
    function NumberSeriesA(){
        echo "NumberSeries A\n";
    }
    function NumberSeriesB(){
        echo "NumberSeries B\n";
    }
}

class NumberSeriesDeclare {
    use SeriesOne;

    function NumberSeriesA(){
        echo "NumberSeries A Now declare from override function\n";
    }
}

$obj = new NumberSeriesDeclare();
$obj->NumberSeriesA();


//In this programme that function will run which function was Decalare in traits. Because that Now traits function has first priority. But we can declare override function from base class.

trait SeriesTwo{
    function NumberSeriesC(){
        echo "NumberSeries C\n";
        //to declare base class override function
        echo parent::NumberSeriesC();
    }
    function NumberSeriesD(){
        echo "NumberSeries D\n";
    }
}

class BaseClass{
    function NumberSeriesC(){
        echo "NumberSeries C Now declare from override function\n";
    }
}
class NumberSeriesCall extends BaseClass{
    use SeriesTwo;
}

$obj1 = new NumberSeriesCall();
$obj1 -> NumberSeriesC();