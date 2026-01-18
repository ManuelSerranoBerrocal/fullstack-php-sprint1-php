<?php
/*
Nivel 1 - Ejercicio 3
Sobrescribe alguna de las lógicas de entre todos los métodos mágicos que existen (que no sea __construct).
alijo __toString(), que se llama cuando el objeto se trata como cadena.
Es muy útil para depuración y presentación.

*/

class Pensamiento {
    private string $texto;
    private string $autor;

    public function __construct(string $texto, string $autor = 'Anónimo') {
        $this->texto = $texto;
        $this->autor = $autor;
    }

    public function __toString(): string {
        return "\"{$this->texto}\" — {$this->autor}";
    }

    public function getTexto(): string {
        return $this->texto;
    }
}

$pensamiento = new Pensamiento(
    "Bien sea que lo hagas o no lo hagas, igual el tiempo pasará, así que mejor hazlo.",
    "Manuel Enrique Serrano Berrocal"
);

echo "<h3>Nivel 1 - Ejercicio 3: Método mágico __toString()</h3>";
echo "<p>Mi pensamiento: " . $pensamiento . "</p>";
echo "<p>Hoy reflexiono: " . $pensamiento . "</p>";
?>