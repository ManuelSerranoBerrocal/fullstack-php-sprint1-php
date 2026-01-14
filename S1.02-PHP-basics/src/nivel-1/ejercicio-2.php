<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Operaciones con strings</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <?php
        /*
        Imprimir por pantalla "Hello, World!" utilizando una variable. Después:
        Transforma todos los caracteres del string a mayúsculas e imprime en pantalla.
        Imprime por pantalla el tamaño (longitud) de la variable.
        Imprime por pantalla el string en orden inverso de caracteres.
        Crea una nueva variable con el contenido "Este es el curso de PHP"
        e imprime por pantalla la concatenación de ambos strings.
        */

        $message = "Hello, World!";

        echo "<h2>Ejercicio 2 - Operaciones con strings</h2>";
        echo "<p>Original: " . htmlspecialchars($message) . "</p>";
        echo "<p>Mayúsculas: " . htmlspecialchars(strtoupper($message)) . "</p>";
        echo "<p>Longitud: " . strlen($message) . "</p>";
        echo "<p>Inverso: " . htmlspecialchars(strrev($message)) . "</p>";

        $course = "Este es el curso de PHP";
        echo "<p>Concatenación: " . htmlspecialchars($message . " " . $course) . "</p>";
        ?>
    </div>
</body>
</html>