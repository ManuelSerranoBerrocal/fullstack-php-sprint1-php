<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Criba de Eratóstenes</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <?php
        /*
        Nivel 3 - Ejercicio 1
        Implementación de la Criba de Eratóstenes.
        Devuelve todos los números primos menores o iguales a $n.
        */

        function CribaDeEratostenes($n) {
            // Caso base: si n es menor que 2, no hay primos
            if ($n < 2) {
                return [];
            }

            // Inicializamos un array para marcar los números primos
            $isPrime = array_fill(0, $n + 1, true);
            
            // 0 y 1 no son primos
            $isPrime[0] = false;
            $isPrime[1] = false;

            // Recorremos desde 2 hasta la raíz cuadrada de $n
            for ($i = 2; $i * $i <= $n; $i++) {
                // Si $i sigue siendo primo, marcamos sus múltiplos
                if ($isPrime[$i]) {
                    // Empezamos desde $i * $i (optimización: los múltiplos menores ya fueron marcados)
                    for ($j = $i * $i; $j <= $n; $j += $i) {
                        $isPrime[$j] = false;
                    }
                }
            }

            // Recopilamos todos los números que siguen siendo primos
            $primes = [];
            for ($i = 2; $i <= $n; $i++) {
                if ($isPrime[$i]) {
                    $primes[] = $i; // Añadimos el número al array de primos
                }
            }
            
            return $primes;
        }

        // Pruebas del algoritmo
        echo "<h2>Ejercicio 1 - Criba de Eratóstenes</h2>";
        echo "<p>Primos hasta 30: " . implode(", ", CribaDeEratostenes(30)) . "</p>";
        echo "<p>Primos hasta 100: " . implode(", ", CribaDeEratostenes(100)) . "</p>";
        echo "<p>Primos hasta 1: " . (empty(CribaDeEratostenes(1)) ? "Ninguno" : "Error") . "</p>";
        ?>
    </div>
</body>
</html>