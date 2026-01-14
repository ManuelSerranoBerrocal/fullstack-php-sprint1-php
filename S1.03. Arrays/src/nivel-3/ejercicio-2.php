<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2- Palabras con longitud</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        S1.03.Arrays - Nivel 3 - Ejercicio 2
        Dado un array de strings, haz un programa que:

        Devuelva un array donde solo estén los strings que tengan un 
        número par de caracteres usando la función array_filter().
        */


        $palabras=["hola","PHP","array","ejercicio","test"];
        $longitudPar= array_filter($palabras, function($palabra){ 
            return strlen($palabra)% 2=== 0; });

        $longitudImpar= array_filter($palabras, function($palabra){ 
            return strlen($palabra)% 2!== 0; });

        // array_values() para reindexar 
        $longitudPar= array_values($longitudPar);
        $longitudImpar= array_values($longitudImpar);

        
        echo"<h2>Ejercicio 2- Palabras con longitud par</h2>"; 
        echo"Original: ". implode(", ",$palabras)."<br><br>"; 
        echo"Longitud par: ". implode(", ",$longitudPar)."<br><br>"; 
        echo"Longitud impar: ". implode(", ",$longitudImpar)."<br><br>";

        ?>    
    </div>
</body>
</html>

