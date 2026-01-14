<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Tipos de datos</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <?php
        /*
        Ejercicio 1
        Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla/terminal.
        Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla o imprimeix-la per terminal.
        */

        // Variables de tipos básicos
        $entero = 51;
        $double = 3.14;
        $string = "Hola Mundo desde Barcelona";
        $booleano = true;

        // Imprímelas por pantalla/terminal
        echo "<h2>Ejercicio 1 - Tipos de datos</h2>";
        echo "<p>Entero: " . $entero . "</p>";
        echo "<p>Decimal: " . $double . "</p>";
        echo "<p>Cadena: " . htmlspecialchars($string) . "</p>";
        echo "<p>Booleano: " . ($booleano ? "true" : "false") . "</p>";

        // constante que incluya mi nombre
        define("MI_NOMBRE_", "Manuel");

        // muéstralo en formato título por pantalla o imprímelo por terminal
        echo "<p>Nombre en formato título: " . ucfirst(strtolower(MI_NOMBRE_)) . "</p>";
        ?>
    </div>
</body>
</html>