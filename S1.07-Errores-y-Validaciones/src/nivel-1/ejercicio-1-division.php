<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 1 - Ejercicio 1</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html">🔙 Volver al menú</a></p>
        <?php
        /*
        Nivel 1 - Ejercicio 1
        Un caso clásico de situación que nos puede generar una excepción sería dividir un número entre 0.
        Haz un programa en el que se pueda producir esta situación y gestiona este error con una sentencia try-catch.
        */
        function dividir(float $a, float $b): float {
            if ($b == 0) throw new DivisionByZeroError("No se puede dividir por cero.");
            return $a / $b;
        }

        echo "<h3>Nivel 1 - Ejercicio 1: División por cero</h3>";

        $casos = [[10, 2], [15, 0], [7, -1]];
        foreach ($casos as [$x, $y]) {
            try {
                $r = dividir($x, $y);
                echo "✅ $x ÷ $y = " . number_format($r, 2) . "<br>";
            } catch (DivisionByZeroError $e) {
                echo "❌ Error: " . $e->getMessage() . "<br>";
            }
        }
        ?>
    </div>
</body>
</html>