<?php 
class RGB{
    private $color;
    private $red;
    private $green;
    private $blue;
    public function __construct($colorCode = ''){
        $this -> color = ltrim($colorCode, '#');
        $this -> parseColor();
    }
    public function getColor(){
        return $this->color;
    }
    public function getRGB(){
        return array($this->red, $this->green, $this->blue);
    }
    public function readRGB(){
        echo "RED = {$this->red}\nGreen = {$this->green}\nBlue = {$this->blue}\n";
    }
    public function setColor($colorCode){
        $this->color = ltrim($colorCode, '#');
    }
    private function parseColor(){
        if($this->color):
            list($this->red, $this->green, $this->blue) = sscanf($this->color, "%02x%02x%02x");
        else:
            list($this->red, $this->green, $this->blue) = array(0,0,0);
        endif;
    }
}

$obj = new RGB("#ff9945");
$obj-> readRGB();
