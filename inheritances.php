<?php
class Shape {
    public function area() {
        return 0;
    }
}

// Circle
class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }
}

// Rectangle
class Rectangle extends Shape {
    private $width, $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

$circle = new Circle(32);
echo "Circle Area: " . $circle->area() . "\n";

$rectangle = new Rectangle(3, 2);
echo "Rectangle Area: " . $rectangle->area() . "\n";

?>