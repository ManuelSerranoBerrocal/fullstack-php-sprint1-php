<?php
require_once 'Shape.php';

class Triangle extends Shape {
    public function calculateArea(): float {
        return ($this->width * $this->height) / 2;
    }
}
?>