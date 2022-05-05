<?php
/*  1. We can not instantiate traits but we can use traits in a class as many times we want 
    2. Traits can also use traits
    3. Generally traits is used for store common function and reuse anything
*/

trait NumberSeries1{
    //use NumberSeries2 Traits
    use NumberSeries2;
    function NumberSeriesA(){
        echo "NumberSeries A\n";
    }
    function NumberSeriesB(){
        echo "NumberSeries B\n";
    }
}

trait NumberSeries2{
    function NumberSeriesC(){
        echo "NumberSeries C\n";
    }
    function NumberSeriesD(){
        echo "NumberSeries D\n";
    }
}

class TraitUse{
    use NumberSeries1;
}

$obj = new TraitUse();
$obj->NumberSeriesA();
$obj->NumberSeriesB();
$obj->NumberSeriesC();
$obj->NumberSeriesD();