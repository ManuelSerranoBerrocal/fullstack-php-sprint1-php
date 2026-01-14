<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Criba de Eratóstenes</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        Nivel 3 - Ejercicio 1
        Implementación de la Criba de Eratóstenes.
        Devuelve todos los números primos menores o iguales a $n.
        */

        function CribaDeEratostenes($n) {
            if ($n < 2) {
                return [];
            }

            $isPrime = array_fill(0, $n + 1, true);
            
            $isPrime[0] = false;
            $isPrime[1] = false;

            for ($i = 2; $i * $i <= $n; $i++) {
                if ($isPrime[$i]) {
                    for ($j = $i * $i; $j <= $n; $j += $i) {
                        $isPrime[$j] = false;
                    }
                }
            }

            $primes = [];
            for ($i = 2; $i <= $n; $i++) {
                if ($isPrime[$i]) {
                    $primes[] = $i; 
                }
            }
            
            return $primes;
        }

        echo "<h2>Ejercicio 1 - Criba de Eratóstenes</h2>";
        echo "<p>Primos hasta 30: " . implode(", ", CribaDeEratostenes(30)) . "</p>";
        echo "<p>Primos hasta 100: " . implode(", ", CribaDeEratostenes(100)) . "</p>";
        echo "<p style='color:red;'>Primos hasta 1: " . (empty(CribaDeEratostenes(1)) ? "Ninguno" : "Error") . "</p>";
        ?>
    </div>
</body>
</html>