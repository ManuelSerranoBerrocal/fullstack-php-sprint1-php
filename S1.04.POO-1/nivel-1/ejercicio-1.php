<?php
/*
Nivel 1 - Ejercicio 1

Crea una clase que represente a un empleado, con atributos referidos a su nombre y salario.
Define un método que reciba como parámetros el nombre y el salario.
Plantea un segundo método que imprima el nombre y un mensaje
que muestre si debe pagar o no impuestos (si el salario supera los 6000, paga impuestos).
*/

class Empleado {

    private $nombre;
    private $salario;

        public function __construct($nombre, $salario) {
        $this->nombre = $nombre;
        $this->salario = $salario;
    }

        public function mostrarEstadoImpuestos() {
        $estado = ($this->salario > 6000) ? "paga impuestos" : "no paga impuestos";
        echo "Empleado: {$this->nombre}: salario = {$this->salario}, por lo tanto $estado.<br><br>";
    }
}

echo "<h3>Nivel 1 - Ejercicio 1: Clase Empleado</h3>";

$empleado1 = new Empleado("Ana", 7000);
$empleado2 = new Empleado("Luis", 5000);
$empleado3 = new Empleado("Manuel Serrano", 280000);

$empleado1->mostrarEstadoImpuestos();
$empleado2->mostrarEstadoImpuestos();
$empleado3->mostrarEstadoImpuestos();
?>
