<?php

// Variables de tipos básicos
$entero = 42;
$double = 3.14;
$string = "Hola Mundo desde Barcelona";
$booleano = true;

// Imprímelas por pantalla/terminal
echo "<h2>Ejercicio 1 - Tipos de datos</h2>";
echo "Entero: " . $entero . "<br>";
echo "Decimal: " . $double . "<br>";
echo "Cadena: " . $string . "<br>";
echo "Booleano: " . ($booleano ? "true" : "false") . "<br><br>";

// constante que incluya mi nombre
define("MI_NOMBRE", "Manuel");

// muéstralo en formato título por pantalla o imprímelo por terminal
echo "Nombre en formato título: " . ucfirst(strtolower(MI_NOMBRE)) . "<br>";
?>