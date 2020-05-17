<?php
include_once "Shape.php";

class Circle extends Shape
{
    public $radius;

    public function __construct($name, $radius)
    {
        $this->radius = $radius;
    parent::__construct($name);
}
public function calculateArea(){
        return pi()*pow($this->radius,2);
}
public function calculatePerimeter(){
        return 2*pi()*$this->radius;
}
}