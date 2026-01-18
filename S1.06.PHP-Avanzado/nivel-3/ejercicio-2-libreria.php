<?php
/*
Nivel 3 - Ejercicio 2
Instala Composer en tu ordenador. Echa un vistazo a alguna librería que te interese e instálala mediante Composer.
Crea un programa que utilice dicha librería.
Usamos Monolog para registrar mensajes en un archivo.
*/

require_once __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('ejercicio_nivel3');

$log->pushHandler(new StreamHandler(__DIR__ . '/app.log', Logger::INFO));

$log->info("Usuario Manuel Migrando de Java a PHP Avanzado");
$log->warning("Recordar revisar el archivo app.log para ver los registros");

echo "<h3>Nivel 3 - Ejercicio 2: Uso de librería externa (Monolog)</h3>";
echo "<p>✅ Mensajes registrados en <code>app.log</code></p>";
echo "<p>Contenido del log:</p><pre>";
echo htmlspecialchars(file_get_contents(__DIR__ . '/app.log'));
echo "</pre>";
?>