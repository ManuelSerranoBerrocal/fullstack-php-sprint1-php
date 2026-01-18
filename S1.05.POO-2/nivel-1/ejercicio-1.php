<?php
/*
Nivel 1 - Ejercicio 1
Necesitamos crear un tipo de dato que represente a un animal. 
Los animales tienen un nombre y “hablan”. Sin embargo, debemos tener en cuenta que no es lo mismo 
el sonido del “habla” de un perro que el de un gato, por ejemplo. Por lo tanto, necesitamos crear 
otros tipos de datos que nos ayuden a programar estos comportamientos entre diferentes animales.

Crea al menos 2 animales.
*/

interface Animal
{
    public function getNombre(): string;
    public function hablar(): string;
}

/**
 * Clase Perro
 */
class Perro implements Animal
{
    public function __construct(
        private string $nombre
    ) {}

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function hablar(): string
    {
        return "¡Guau guau!";
    }
}

/**
 * Clase Gato
 */
class Gato implements Animal
{
    public function __construct(
        private string $nombre
    ) {}

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function hablar(): string
    {
        return "¡Miaaaau!";
    }
}

/* ===== PRUEBA DE POLIMORFISMO ===== */

$animales = [
    new Perro("Odye"),
    new Gato("Garfield")
];

foreach ($animales as $animal) {
    echo $animal->getNombre() . " dice: " . $animal->hablar() . "<br>";
}
?>