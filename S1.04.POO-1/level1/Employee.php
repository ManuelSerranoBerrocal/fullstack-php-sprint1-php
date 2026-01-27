<?php
/* Nivel 1 - Ejercicio 1

Crea una clase que represente a un empleado, con atributos referidos a su nombre y salario.
Define un método que reciba como parámetros el nombre y el salario.
Plantea un segundo método que imprima el nombre y un mensaje
que muestre si debe pagar o no impuestos (si el salario supera los 6000, paga impuestos).

*/

class Employee {
    private string $name;
    private float $salary;

    public function __construct(string $name, float $salary) {
        $this-> name = $name;
        $this-> salary = $salary;
    }

        public function displayTaxStatus(): void {
        $status = ($this->salary > 6000) ? "paga impuestos" : "no paga impuestos";
        echo "Empleado: {$this->name}, salario: {$this->salary}, por lo tanto $status.<br><br>";
    }
}
