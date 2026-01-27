<?php
// Incluimos la interfaz que vamos a implementar
require_once 'Animal.php';

class Dog implements Animal {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;  // Asigna el valor recibido al atributo $name
    }

    public function getName(): string {
        return $this->name;
    }

    public function speak(): string {
        return "¡Guau guau!";
    }
}
?>