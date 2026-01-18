<?php
/*
S1.05 - POO2
Nivel 1 - Ejercicio 2
Escribir un programa que defina una clase Shape con un constructor que reciba ancho y alto.
Definir dos subclases:

Triangle

Rectangle

que hereden de Shape y calculen el área correspondiente.

Importante:
Es el mismo ejercicio que POO1, pero ahora debe resolverse usando conceptos de POO2.
*/
abstract class Shape
{
    protected float $width;
    protected float $height;

    public function __construct(float $width, float $height)
    {
        $this->width  = $width;
        $this->height = $height;
    }

    /**
     * Obliga a todas las figuras a calcular su área
     */
    abstract public function calculateArea(): float;
}

class Rectangle extends Shape
{
    public function calculateArea(): float
    {
        return $this->width * $this->height;
    }
}

class Triangle extends Shape
{
    public function calculateArea(): float
    {
        return ($this->width * $this->height) / 2;
    }
}

/* ===== Prueba de polimorfismo ===== */
echo "<h3>Nivel 1 - Ejercicio 2 (POO2): Shape, Rectangle, Triangle</h3>";
$shapes = [
    new Rectangle(5, 3),
    new Triangle(4, 6)
];

foreach ($shapes as $shape) {
    echo "Área: " . $shape->calculateArea() . "<br>";
}

?>
