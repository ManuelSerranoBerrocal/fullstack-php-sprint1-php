<?php
require_once 'Turbo.php';

class Car {
    // Usa el trait Turbo → hereda el método boost()
    use Turbo;

    // Constructor con propiedades promovidas
    public function __construct(
        public string $brand,
        public string $licensePlate,
        public string $fuelType,
        public int $maxSpeed
    ) {}

    /**
     * Muestra la información del coche en formato HTML.
     */
    public function display(): void {
        echo "<p><strong>Coche:</strong> {$this->brand} ({$this->licensePlate})<br>";
        echo "<strong>Combustible:</strong> {$this->fuelType}<br>";
        echo "<strong>Velocidad máxima:</strong> {$this->maxSpeed} km/h</p>";
    }
}
?>