<?php

require_once 'Shapes/Circle.php';
require_once 'Shapes/Rectangle.php';

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

echo "Circle Area: " . $circle->getArea() . "\n";
echo "Rectangle Area: " . $rectangle->getArea() . "\n";
