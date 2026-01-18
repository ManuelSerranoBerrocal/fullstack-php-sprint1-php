<?php
/*
Nivel 2 - Ejercicio 2
Implementa una clase Car que contenga información sobre un 
coche (marca, matrícula, tipo de combustible, velocidad máxima). 
Además, implementa un Trait llamado Turbo que tenga un método boost() 
que muestre el mensaje “Se ha iniciado el turbo”. Utiliza este método desde la clase Car.
*/

trait Turbo {
    public function boost(): void {
        echo "Se ha iniciado el turbo!<br>";
    }
}

class Car {
    use Turbo; 

    public function __construct(
        public string $marca,
        public string $matricula,
        public string $combustible,
        public int $velocidadMaxima
    ) {}

    public function mostrar(): void {
        echo "<p><strong>Coche:</strong> {$this->marca} ({$this->matricula})<br>";
        echo "Combustible: {$this->combustible}<br>";
        echo "Velocidad máxima: {$this->velocidadMaxima} km/h</p>";
    }
}

echo "<h3>Nivel 2 - Ejercicio 2: Coche con Trait Turbo</h3>";

$coche = new Car("Toyota", "ABC123", "Gasolina", 180);
$coche->mostrar();
$coche->boost(); 
?>