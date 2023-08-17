## Class Inheritance Documentation - Task 1

This documentation provides an overview of the PHP classes involved in solving the Class Inheritance problem for Task 1.

### Shape Class

The `Shape` class is an abstract class that serves as the base for various geometric shapes. It contains an abstract method `getArea()`, which must be implemented by its derived classes. Here's the definition of the `Shape` class:

```php
abstract class Shape
{
    abstract public function getArea();
}
```

### Circle Class

The `Circle` class extends the `Shape` class and represents a circle shape. It has a private property `$radius` and implements the `getArea()` method to calculate the area of the circle using the formula π * radius^2. Here's the definition of the `Circle` class:

```php
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
```

### Rectangle Class

The `Rectangle` class also extends the `Shape` class and represents a rectangle shape. It has private properties `$width` and `$height`, and it implements the `getArea()` method to calculate the area of the rectangle by multiplying its width and height. Here's the definition of the `Rectangle` class:

```php
class Rectangle extends Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea()
    {
        return $this->width * $this->height;
    }
}
```

### Usage and Expected Output

In the usage example, instances of the Circle and Rectangle classes are created and their areas are calculated using the` getArea()` method. The results are then displayed using echo. Here's the usage example:

```php
require_once 'Shapes/Circle.php';
require_once 'Shapes/Rectangle.php';

$circle = new Circle(5);
$rectangle = new Rectangle(4, 6);

echo "Circle Area: " . $circle->getArea() . "\n";
echo "Rectangle Area: " . $rectangle->getArea() . "\n";
```

### Expected Output

```
Circle Area: 78.539816339745
Rectangle Area: 24
```
