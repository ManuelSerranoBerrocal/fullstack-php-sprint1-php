<?php
/**
 * Interfaz Animal: define el "contrato" que toda clase animal debe cumplir.
 * Una interfaz solo declara métodos, no implementa lógica.
 * Cualquier clase que "implemente" esta interfaz debe definir estos métodos.
 */
interface Animal {
    // Devuelve el nombre del animal 
    public function getName(): string;
    
    // Devuelve el sonido que hace el animal 
    public function speak(): string;
}
?>