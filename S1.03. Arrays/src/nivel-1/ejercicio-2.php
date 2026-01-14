<!DOCTYPE html>
<html lang="es">
<head>
 <!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Manipulación de array indexado</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        S1.03.Arrays - Nivel 1 - Ejercicio 2
        Haz un programa que tenga un array indexado de 6 elementos y luego:
        1) Muestre por pantalla el tamaño del array anterior.
        2) Elimine un elemento del array anterior. Comprueba que los índices/claves del array estén normalizados 
        (los índices se deben reorganizar para que no haya saltos entre ellos).
        3) Muestre por última vez el tamaño del array y su contenido.
        */

        $invitados = ["Edith", "Mercedes", "Carlos", "Gisela", "Olga", "Rominana"];

        echo "<h2>Ejercicio 2 - Manipulación de array indexado</h2>";
        echo "Tamaño inicial: " . count($invitados) . "<br>";
        echo "Contenido inicial: " . implode(", ", $invitados) . "<br><br>";
        
        unset($invitados[2]);

        // Reorganizamos los índices
        $invitados = array_values($invitados);

        echo "Tamaño final: " . count($invitados) . "<br>";
        echo "Contenido final: " . implode(", ", $invitados) . "<br>";
        ?>
    </div>
</body>
</html>