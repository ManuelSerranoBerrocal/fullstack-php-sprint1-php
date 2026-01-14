<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Operaciones aritméticas</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <?php
        /*
        Ejercicio 3
        a) Declara dos variables X e Y de tipo int, dos variables N y M de tipo double...
        b) Crea un programa que tenga una función que reciba dos números...
        */

        $x = 10; 
        $y = 3; 
        $n = 7.5;
        $m = 2.5;

        echo "<h2>Ejercicio 3 - Operaciones aritméticas</h2>";

        // Operaciones con X e Y (enteros)
        echo "<h3>Con X = $x y Y = $y (enteros):</h3>";
        echo "<p>Valor de X: $x</p>";
        echo "<p>Valor de Y: $y</p>";
        echo "<p>Suma: " . ($x + $y) . "</p>";
        echo "<p>Resta: " . ($x - $y) . "</p>";
        echo "<p>Producto: " . ($x * $y) . "</p>";
        echo "<p>Módulo (X % Y): " . ($x % $y) . "</p>";

        // Operaciones con N y M (decimales)
        echo "<h3>Con N = $n y M = $m (decimales):</h3>";
        echo "<p>Valor de N: $n</p>";
        echo "<p>Valor de M: $m</p>";
        echo "<p>Suma: " . ($n + $m) . "</p>";
        echo "<p>Resta: " . ($n - $m) . "</p>";
        echo "<p>Producto: " . ($n * $m) . "</p>";
        echo "<p>Módulo (N%M): " . fmod($n, $m) . "</p>";

        // Operaciones con todas las variables
        echo "<h3>Con todas las variables (X, Y, N, M):</h3>";
        echo "<p>Doble de X: " . ($x * 2) . "</p>";
        echo "<p>Doble de Y: " . ($y * 2) . "</p>";
        echo "<p>Doble de N: " . ($n * 2) . "</p>";
        echo "<p>Doble de M: " . ($m * 2) . "</p>";
        echo "<p>Suma total: " . ($x + $y + $n + $m) . "</p>";
        echo "<p>Producto total: " . ($x * $y * $n * $m) . "</p>";

        // b) Función para operaciones aritméticas con excepciones
        function arithmeticOperation(float $num1, float $num2, string $operation): float {
            $op = strtolower(trim($operation));

            switch ($op) {
                case 'suma':
                    return $num1 + $num2;
                case 'resta':
                    return $num1 - $num2;
                case 'multiplicacion':
                    return $num1 * $num2;
                case 'division':
                    if ($num2 == 0) {
                        throw new Exception("Error: división por cero");
                    }
                    return $num1 / $num2;
                default:
                    throw new Exception("Error: operación no válida");
            }
        }

        // Ejemplos de uso dentro de try/catch
        echo "<h3>Ejemplos de la función:</h3>";
        try {
            echo "<p>suma(8, 4) = " . arithmeticOperation(8, 4, 'suma') . "</p>";
            echo "<p>resta(8, 4) = " . arithmeticOperation(8, 4, 'resta') . "</p>";
            echo "<p>multiplicacion(8, 4) = " . arithmeticOperation(8, 4, 'multiplicacion') . "</p>";
            echo "<p>division(8, 4) = " . arithmeticOperation(8, 4, 'division') . "</p>";
            echo "<p>potencia(8, 4) = " . arithmeticOperation(8, 4, 'potencia') . "</p>";
        } catch (Exception $e) {
            echo "<p style='color:red;'>¡Excepción capturada!: " . htmlspecialchars($e->getMessage()) . "</p>";
        }
        ?>
    </div>
</body>
</html>