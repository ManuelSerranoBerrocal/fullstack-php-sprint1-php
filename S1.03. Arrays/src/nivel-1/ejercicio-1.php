<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Array de enteros</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        S1.03.Arrays - Nivel 1 - Ejercicio 1
        Crea un array, añádele 5 números enteros y luego muéstralos por pantalla uno por uno.
        */

        $numbers = [37, 42, 26, 50, 51];

        echo "<h2>Ejercicio 1 - Array de enteros</h2>";

        foreach ($numbers as $number) {
            echo "<p>$number</p>";
        }
        ?>
    </div>
</body>
</html>

