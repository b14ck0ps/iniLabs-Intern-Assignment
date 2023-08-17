<?php
require_once 'Shape.php';

class Circle extends Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getArea()
    {
        return pi() * pow($this->radius, 2);
    }
}
