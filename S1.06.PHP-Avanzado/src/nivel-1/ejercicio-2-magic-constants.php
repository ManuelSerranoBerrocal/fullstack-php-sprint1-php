<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 1 - Ejercicio 2: Constantes Mágicas</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html">🔙 Volver al menú</a></p>
        <?php
        /*
        Nivel 1 - Ejercicio 2
        Haz un programa que utilice al menos un par de constantes mágicas.
        */

        function mostrarContexto() {
            echo "<p><strong>Archivo actual:</strong> " . __FILE__ . "</p>";
            
            echo "<p><strong>Línea de este echo:</strong> " . __LINE__ . "</p>";
            
            echo "<p><strong>Función actual:</strong> " . __FUNCTION__ . "</p>";
            
            echo "<p><strong>Directorio del script:</strong> " . __DIR__ . "</p>";
        }

        echo "<h2>Nivel 1 - Ejercicio 2 Constantes mágicas en acción:</h2>";

        mostrarContexto();

        echo "<p><strong>Línea final del script:</strong> " . __LINE__ . "</p>";
        ?>
    </div>
</body>
</html>