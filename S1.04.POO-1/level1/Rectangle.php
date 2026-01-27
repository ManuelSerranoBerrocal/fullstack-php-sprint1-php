<?php
require_once 'Shape.php';
/**
 * Clase Rectangle (Rectángulo) que hereda de Shape.
 * Calcula el área como ancho × alto.
 */

class Rectangle extends Shape {
    public function calculateArea(): float {
        return $this -> width * $this -> height;
    }
}

?>  