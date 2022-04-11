<?php 
trait SeriesOne{
    function NumberSeriesA(){
        echo "NumberSeries A\n";
    }
}

trait SeriesTwo{
    function NumberSeriesA(){
        echo "NumberSeries A+\n";
    }
}

class NumberSeries{
   use SeriesOne,SeriesTwo{
        SeriesOne::NumberSeriesA as NumberSeriesAA;
        SeriesTwo::NumberSeriesA as NumberSeriesAAA;
   }

   function NumberSeriesA(){
       echo "NumberSeries A override";
   }
}

$object = new NumberSeries();
$object->NumberSeriesAAA();