<?php
require_once 'AreaCalculable.php';

/**
 * Rectangle implementa AreaCalculable (no hereda de Shape).
 * Ahora define sus propias propiedades.
 */
class Rectangle implements AreaCalculable {
    private float $width;
    private float $height;

    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(): float {
        return $this->width * $this->height;
    }

    public function getDescription(): string {
        return "Rectángulo ({$this->width} × {$this->height})";
    }
}
?>