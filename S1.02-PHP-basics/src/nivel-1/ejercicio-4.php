<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 - Conteo con parámetros</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <?php
        /*
        Ejercicio 4
        Haz un programa que implemente una función en la que se cuente hasta un número determinado.
        Si no se incluye un número determinado, el número deberá tener un valor por defecto igual a 10.
        Además, esta función debe tener un segundo parámetro que 
        indique de cuánto en cuánto se cuenta (de 1 en 1, de 2 en 2, etc.).
        El conteo debe mostrarse por pantalla paso a paso.
        */

        function contarHasta($limite = 10, $paso = 1) {
            // Validar que los parámetros sean positivos
            if ($limite <= 0 || $paso <= 0) {
                echo "<p style='color:red;'>Error: límite y paso deben ser positivos.</p>";
                return;
            }
            
            // Mostramos el encabezado del conteo
            echo "<h3>Contando hasta $limite de $paso en $paso:</h3>";
            
            // Realizamos el conteo desde 1
            for ($i = 1; $i <= $limite; $i += $paso) {
                echo $i . ", "; 
            }
            echo "<br><br>"; 
        }

        // Llamadas a la función con diferentes parámetros
        contarHasta();  
        contarHasta(20, 2);  
        contarHasta(15, 3); 
        contarHasta(51, 4); 
        contarHasta(100, (2**2-1)); 
        ?>
    </div>
</body>
</html>