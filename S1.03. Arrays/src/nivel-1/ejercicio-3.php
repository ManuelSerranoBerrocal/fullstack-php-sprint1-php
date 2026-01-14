<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 3 - Búsqueda de carácter en palabras</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        S1.03.Arrays - Nivel 1 - Ejercicio 3
        Crea una función que reciba como parámetros un array de palabras y un carácter. 
        La función devuelve true si todas las palabras del array contienen el carácter pasado como segundo parámetro.
        Por ejemplo:
        Si tenemos ["hola", "Php", "Html"], devolverá true si preguntamos por "h" pero false si preguntamos por "l".
        */

        function allWordsContainChar($words, $char) {
            $char = strtolower($char); 
            foreach ($words as $word) {
                if (strpos(strtolower($word), $char) === false) {
                    return false; 
                }
            }
            return true;
        }

        // Pruebas
         echo "<h2>Ejercicio 3 - Búsqueda de carácter en palabras</h2>";
        $words = ["hola", "Php", "Html"];
        echo "Palabras: " . implode(", ", $words) . "<br><br>";
        echo "Todas contienen 'h'? " . (allWordsContainChar($words, 'h') ? "Sí" : "No") . "<br><br>";
        echo "Todas contienen 'l'? " . (allWordsContainChar($words, 'l') ? "Sí" : "No") . "<br><br>";
        echo "Todas contienen 'x'? " . (allWordsContainChar($words, 'x') ? "Sí" : "No") . "<br><br>";
        ?>
</div>
</body>
</html>