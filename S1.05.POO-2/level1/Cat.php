<?php
require_once 'Animal.php';

/**
 * Clase Cat (Gato): también implementa la interfaz Animal.
 * Tiene su propia implementación de los métodos.
 */
class Cat implements Animal {
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function speak(): string {
        return "¡Miaaaau!";
    }
}
?>