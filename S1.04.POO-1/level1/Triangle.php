<?php
require_once 'Shape.php';

/**
 * Clase Triangle (Triángulo) que hereda de Shape.
 * Calcula el área como (ancho × alto) / 2.
 */

class Triangle extends Shape {
    function calculateArea(): float {
        return ($this -> width * $this -> height)/2;
    }
}


?>