<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 6 - ¿Charlie te mordió?</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        Charlie me mordió el dedo! Charlie te morderá el dedo exactamente el 50% del tiempo.
        Escribe la función isBitten() que devuelve TRUE con un 50% de probabilidad y FALSE en caso contrario.
        Consejo: usa la función rand().
        */

        function isBitten() {
            return rand(0, 1) === 1;
        }

        echo "<h2>Ejercicio 6 - ¿Charlie te mordió el dedo?</h2>";
        $result = isBitten();
        echo "<p>" . ($result ? "¡Sí! Charlie te mordió el dedo." : "No, esta vez escapaste.") . "</p>";
        
        echo "<h3>Múltiples intentos:</h3>";
        for ($i = 1; $i <= 5; $i++) {
            $mordio = isBitten() ? "Mordió" : "No mordió";
            echo "<p>Intento $i: $mordio</p>";
        }
        ?>
    </div>
</body>
</html>