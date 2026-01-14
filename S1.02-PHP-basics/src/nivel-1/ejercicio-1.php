<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Tipos de datos</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        Ejercicio 1
        Defineix una variable de cada tipus: integer, double, string i boolean. Imprimeix-les per pantalla/terminal.
        Després crea una constant que inclogui el teu nom i mostra-ho en format títol per pantalla o imprimeix-la per terminal.
        */

        $entero = 51;
        $double = 3.14;
        $string = "Hola Mundo desde Barcelona";
        $booleano = true;

        echo "<h2>Ejercicio 1 - Tipos de datos</h2>";
        echo "<p>Entero: " . $entero . "</p>";
        echo "<p>Decimal: " . $double . "</p>";
        echo "<p>Cadena: " . htmlspecialchars($string) . "</p>";
        echo "<p>Booleano: " . ($booleano ? "true" : "false") . "</p>";

        define("MI_NOMBRE_", "Manuel");

        echo "<p>Nombre en formato título: " . ucfirst(strtolower(MI_NOMBRE_)) . "</p>";
        ?>
    </div>
</body>
</html>