<?php
/*
Nivel 2 - Ejercicio 1
Siguiendo el ejercicio anterior, imagina cómo ampliarías la estructura que 
has creado para representar un Círculo y su correspondiente cálculo de área.
*/
interface AreaCalculable {
    public function area(): float;
    public function getDetails(): string;
}
abstract class Shape implements AreaCalculable {
    protected float $width;
    protected float $height;

    public function __construct(float $width, float $height) {
        if ($width <= 0 || $height <= 0) {
            throw new InvalidArgumentException("Base y altura deben ser positivos.");
        }
        $this->width = $width;
        $this->height = $height;
    }
}

class Rectangle extends Shape {
    public function area(): float {
        return $this->width * $this->height;
    }

    public function getDetails(): string {
        return "Rectángulo ({$this->width}x{$this->height}) = " . $this->area();
    }
}

class Triangle extends Shape {
    public function area(): float {
        return ($this->width * $this->height) / 2.0;
    }

    public function getDetails(): string {
        return "Triángulo ({$this->width}x{$this->height})/2 = " . $this->area();
    }
}

class Circle implements AreaCalculable {
    private float $radius;

    public function __construct(float $radius) {
        if ($radius <= 0) {
            throw new InvalidArgumentException("El radio debe ser positivo.");
        }
        $this->radius = $radius;
    }

    public function area(): float {
        return pi() * $this->radius * $this->radius;
    }

    public function getDetails(): string {
        return "Círculo (radio={$this->radius}), Solución: (π * radio^2) = " . number_format($this->area(), 2);
    }
}

function probarFigura($figura) {
    if ($figura instanceof AreaCalculable) {
        echo $figura->getDetails() . "<br>";
    }
}

function probarError($callable) { 
    try {
        $callable();
    } catch (InvalidArgumentException $e) {
        echo "Prueba de error: " . $e->getMessage() . "<br>";
    }
}

echo "<h3>Nivel 2 - Ejercicio 1: Hallando áreas de Figuras geométricas</h3>";

probarFigura(new Rectangle(5, 3));
probarFigura(new Triangle(4, 6));
probarFigura(new Circle(5));

echo "<br>";
probarError(function() {
    new Triangle(-4, 6); 
});
?>