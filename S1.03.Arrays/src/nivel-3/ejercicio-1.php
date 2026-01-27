<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1- Valores al cubo con array_map</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        S1.03.Arrays - Nivel 3 - Ejercicio 1
        Dado un array de enteros, haz un programa que:

        Devuelva cada valor del array elevado al cubo usando la función array_map().
        */
        $numeros=[2, 3, 4, 5];
        $numerosAlCubo= array_map(function($numero){ 
            return$numero** 3;
        },$numeros);
        echo"<h2>Ejercicio 1- Valores al cubo con array_map()</h2>"; 
        echo"Original: ". implode(", ",$numeros)."<br><br>"; 
        echo"Al cubo: ". implode(", ",$numerosAlCubo)."<br><br>";
        ?>
    </div>
</body>
</html>