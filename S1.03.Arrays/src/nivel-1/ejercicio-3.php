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
        Si tenemos ["hola", "Php", "Html"].
        */

        function palabraCaracter($palabras, $caracter) {
            $caracter = strtolower($caracter); 
            foreach ($palabras as $palabra) {
                if (strpos(strtolower($palabra), $caracter) === false) {
                
                    return false; 
                }
            }
            return true;
        }

        echo "<h2>Ejercicio 3 - Búsqueda de carácter en palabras</h2>";
        $palabras = ["hola", "Php", "Html"];
        echo "Palabras: " . implode(", ", $palabras) . "<br><br>";
        echo "Todas contienen 'h'? " . (palabraCaracter($palabras, 'h') ? "Sí" : "No") . "<br><br>";
        echo "Todas contienen 'l'? " . (palabraCaracter($palabras, 'l') ? "Sí" : "No") . "<br><br>";
        echo "Todas contienen 'x'? " . (palabraCaracter($palabras, 'x') ? "Sí" : "No") . "<br><br>";
        ?>
</div>
</body>
</html>