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
        Haz un programa que tenga un array indexado de *** 6 ELEMENTOS *** y luego:
        1) ***MUESTRE*** por pantalla el ***TAMAÑO*** del array anterior.
        2) ****ELIMINE*** un elemento del array anterior. 
        Comprueba que los ***INDICES*** /claves del array estén ***NORMALIZADOS*** 
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

        // ****Solución con ***Faker y Composer***
        echo "<h2>Ejercicio 2 - nombtres aleatorios con composer y facker</h2>";
        require_once __DIR__ . '/vendor/autoload.php';

        $faker = Faker\Factory::create('es_ES');

        // 1) Generar array indexado con 6 nombres aleatorios
        $miArray = array_map(fn() => $faker->firstName, range(1, 6));

        echo "<strong>Nombres aleatorios:</strong><br>";
        echo implode(', ', $miArray) . "<br>";
        echo "Tamaño inicial: " . count($miArray) . " nombres<br><br>";

        // 2) Eliminar un nombre al azar
        $indiceEliminar = rand(0, count($miArray) - 1);
        $nombreEliminar = $miArray[$indiceEliminar];
        unset($miArray[$indiceEliminar]);

        echo "<strong>Eliminamos un nombre al azar</strong><br>";
        echo "Nombre a eliminar posición $indiceEliminar: $nombreEliminar<br><br>";

        echo "Después de eliminar el nombre $nombreEliminar queda así:<br>";
        foreach ($miArray as $indice => $nombre) {
            echo "[$indice] => $nombre<br>";
        }
        echo "Tamaño final: " . count($miArray) . "<br><br>";

        // 3) Normalizar índices
        $miArray = array_values($miArray);

        echo "Para arreglar los índices usamos <strong>array_values()</strong>, ahora queda así:<br>";
        foreach ($miArray as $indice => $nombre) {
            echo "[$indice] => $nombre<br>";
        }
        echo "Tamaño final: " . count($miArray) . " nombres<br>";

        ?>
    </div>
</body>
</html>