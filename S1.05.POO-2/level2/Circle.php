<?php
require_once 'AreaCalculable.php';

/**
 * Clase Circle (Círculo): implementa AreaCalculable.
 * Solo necesita el radio, no ancho/altura.
 */
class Circle implements AreaCalculable {
    private float $radius;

    public function __construct(float $radius) {
        if ($radius <= 0) {
            // Lanza un error si el radio no es válido
            throw new InvalidArgumentException("El radio debe ser mayor que cero.");
        }
        $this->radius = $radius;
    }

    public function getArea(): float {
        // Usa la constante pi() de PHP para calcular el área
        return pi() * $this->radius * $this->radius;
    }

    public function getDescription(): string {
        return "Círculo (radio={$this->radius})";
    }
}
?>