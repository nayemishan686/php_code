<?php
//for shallow copy
class Favourite{
    public $data;
    function __construct($data){
        $this->data = $data;
    }

    function setData($data){
        $this->data = $data;
    }
}

// $a = new Favourite("Hi, I am Nayem");
// $b =  clone $a;
// $b->setData("few");
// print_r($a);
// print_r($b);


//for copy by reference
class Color{
    public $color;
    function __construct($color){
        $this->color = $color;
    }

    function setColor($color){
        $this->color = $color;
    }
}

class FavColor{
    public $data;
    public $color;
    public function __construct($data, $color){
        $this->data = $data;
        $this->color = new Color($color);
    }

    function updateColor($color){
        $this->color->setColor($color);
    }

    function __clone(){
        $this->color = clone $this->color;
    }

}

$fc1 = new FavColor("Hi", "Black");
print_r($fc1);

$fc2 = clone $fc1;
$fc2->updateColor("White");
print_r($fc2);

print_r($fc1);
print_r($fc2);