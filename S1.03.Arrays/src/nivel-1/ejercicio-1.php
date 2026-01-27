<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Array de enteros</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p>
            <a href="../../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">
                🔙 Volver al menú principal
            </a>
        </p>

        <?php

        /*
        Ejercicio 1
        Crea un array, añádele 5 números enteros y luego muestrales por pantalla de uno en uno.
        */
        echo "<h2>Nivel 1 - Ejercicio 1 - Array de enteros</h2>";

        $arrayNumbers = [14, 51, 52, 11, 36];

        foreach ($arrayNumbers as $position => $number) {
            echo "<p>El número " . ($position + 1) . " es: $number</p>";
        }

        echo "<h2>Nivel 1.1 - Array de enteros aleatorios</h2>";

        function generarNumerosAleatorios($cantidad, $min, $max) {
            $numerosAleatorios = [];
            for ($i = 0; $i < $cantidad; $i++) {
                $numerosAleatorios[] = rand($min, $max);
            }
            return $numerosAleatorios;
        }

        $numerosGenerados = generarNumerosAleatorios(5, 1, 1000);

        foreach ($numerosGenerados as $position => $number) {
            echo "<p>El número: " . ($position + 1) . " generado es : $number</p>";
        }
        ?>
    </div>
</body>
</html>
