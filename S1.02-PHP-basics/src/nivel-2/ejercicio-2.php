<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2 - Clasificación de jugador</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <!-- Enlace para volver al menú principal -->
        <p><a href="../../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        nivel-2 - Ejercicio 2
        Imagina que estás programando parte de la lógica de la clasificación de puntos de un juego.
        En este programa necesitamos introducir 3 puntuaciones diferentes 
        (las puntuaciones están entre 0 y 9999). De estas puntuaciones necesitaremos:
        Su suma
        Su media
        La clasificación, siendo:
        “Principiante”: menor de 4000
        “Intermedio”: menor de 8000
        “Profesional”: el resto
        Piensa en utilizar más de una función para resolver este problema.
        */

        function getPlayerLevel($total) {
            if ($total < 4000) {
                return "Principiante";
            } elseif ($total < 8000) {
                return "Intermedio";
            } else {
                return "Profesional";
            }
        }

        function analyzeScores($score1, $score2, $score3) {
            // Validación simple: cada puntuación debe estar entre 0 y 9999
            $scores = [$score1, $score2, $score3];
            foreach ($scores as $score) {
                if ($score < 0 || $score > 9999) {
                    echo "<p style='color:red;'>Error: puntuación fuera de rango (0–9999).</p>";
                    return;
                }
            }

            // Calcular suma y media
            $sum = $score1 + $score2 + $score3;
            $average = number_format($sum / 3, 2); // 2 decimales

            // Obtener nivel usando la otra función
            $level = getPlayerLevel($sum);

            // Mostrar resultados en pantalla
            echo "<p>Puntuaciones: $score1, $score2, $score3</p>";
            echo "<p>Suma: $sum</p>";
            echo "<p>Media: $average</p>";
            echo "<p>Clasificación: $level</p>";
        }

        // Pruebas del sistema
        echo "<h2>Ejercicio 2 - Clasificación de jugador</h2>";
        analyzeScores(1000, 1500, 2000); 
        analyzeScores(3000, 2500, 3500); 
        analyzeScores(5000, 6000, 7000);
        analyzeScores(-2510, 500, 600);
        ?>
    </div>
</body>
</html>