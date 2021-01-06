<?php
echo "this is my first page\n";
echo "<hr>";
echo "This is addition of two variables that are declared globally\n";
$a=8;
$b=5;
function test(){
    $GLOBALS['b']=$GLOBALS['b']+$GLOBALS['a'];
}
test();
echo $b;


class car{
    public $color;
    public $model;
    public function __construct($color,$model)
    {
        $this->color=$color;
        $this->model=$model;
    }
 public function caro(){
        return $this->color." ".$this->model;
 }
}
$obj=new car("red","bmw");
echo $obj->caro();