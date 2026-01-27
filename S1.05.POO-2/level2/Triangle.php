<?php
require_once 'AreaCalculable.php';

class Triangle implements AreaCalculable {
    private float $base;
    private float $height;

    public function __construct(float $base, float $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function getArea(): float {
        return ($this->base * $this->height) / 2;
    }

    public function getDescription(): string {
        return "Triángulo (base={$this->base}, altura={$this->height})";
    }
}
?>