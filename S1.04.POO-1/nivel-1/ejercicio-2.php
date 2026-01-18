<?php
/*
Nivel 1 - Ejercicio 2
Escribe un programa que defina una clase Forma con un constructor
que reciba como parámetros el ancho y la altura.
Define dos subclases, Triangulo y Rectangulo, que hereden de Forma
y que calculen respectivamente el área mediante un método.
*/
class Forma {

    protected $ancho;
    protected $alto;

    public function __construct($ancho, $alto) {
        $this->ancho = $ancho;
        $this->alto = $alto;
    }
}

class Rectangulo extends Forma {

    public function calcularArea() {
        return $this->ancho * $this->alto;
    }
}

class Triangulo extends Forma {

    public function calcularArea() {
        return ($this->ancho * $this->alto) / 2;
    }
}

echo "<h3>Nivel 1 - Ejercicio 2: Herencia (Forma, Rectángulo, Triángulo)</h3>";

$rectangulo = new Rectangulo(5, 3);
$triangulo = new Triangulo(4, 6);

echo "Área del rectángulo: " . $rectangulo->calcularArea() . "<br>";
echo "Área del triángulo: " . $triangulo->calcularArea() . "<br>";
?>
