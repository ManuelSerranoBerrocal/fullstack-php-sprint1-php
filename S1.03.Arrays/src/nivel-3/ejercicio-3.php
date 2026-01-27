<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3- Suma de números primos con array_reduce()</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        S1.03.Arrays - Nivel 3 - Ejercicio 3
        Dado un array de enteros, haz un programa que nos devuelva
        la suma de los enteros del array que sean primos usando la función array_reduce().
        */
        function esPrimo($numero){ 
            if($numero< 2) {
                return false;
            }
            for($i = 2; $i * $i <= $numero; $i++){ 
                if($numero % $i=== 0) { 
                    return false;
                }
            }
            return true;
        }

        $numeros=[2, 3, 4, 5, 6, 7, 8, 9, 10, 11];
        $sumaPrimos= array_reduce(
            $numeros, 
            function($acumulador, $valorActual){ 
                if (esPrimo($valorActual)){ 
                    return $acumulador+$valorActual;
                }
                return $acumulador;
            }, 
            0 // Valor inicial= 0
        );

        echo"<h2>Ejercicio 3- Suma de números primos con array_reduce()</h2>"; 
        echo"Array: ". implode(", ",$numeros) . "<br><br>"; 
        echo"Suma de primos: $sumaPrimos<br>"; 

        ?>
    </div>
</body>
</html>