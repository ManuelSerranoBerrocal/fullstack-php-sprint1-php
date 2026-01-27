<?php
/**
 * Interfaz AreaCalculable:
 * Define un contrato más flexible que la clase abstracta Shape.
 * Permite incluir figuras que no tienen "ancho" y "alto" (como el círculo).
 */
interface AreaCalculable {
    // Devuelve el área de la figura (siempre un número decimal)
    public function getArea(): float;
    
    // Devuelve una descripción legible de la figura (para mostrar al usuario)
    public function getDescription(): string;
}
?>