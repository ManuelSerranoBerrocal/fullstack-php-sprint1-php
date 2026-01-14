<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Costo de llamadas</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <?php
        /*
        Nivel 2 - Ejercicio 1
        Escribe una función que determine la cantidad total a pagar 
        por una llamada telefónica según las siguientes premisas:
        Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
        Cada minuto adicional, a partir de los 3 primeros, supone un paso de contador y cuesta 5 céntimos.
        */

        function calculateCallCost($minutes) {
            // Validación simple: la duración no puede ser negativa
            if ($minutes < 0) {
                return "Error: duración no válida";
            }
            
            // Si dura menos de 3 minutos, cuesta 10 céntimos
            if ($minutes < 3) {
                return 10;
            }
            
            // Calculamos los minutos extras (después de los primeros 3)
            $extraMinutes = $minutes - 3;
            
            // Redondeamos hacia arriba: 3.1 → 1 minuto extra, 3.9 → 1, 4.0 → 1
            $extraMinutes = ceil($extraMinutes);
            
            // Costo total: 10 céntimos base + 5 por cada minuto extra
            return 10 + ($extraMinutes * 5);
        }

        // Pruebas
        echo "<h2>Ejercicio 1 - Costo de llamadas telefónicas</h2>";
        echo "<p>2.5 minutos → " . calculateCallCost(2.5) . " céntimos</p>";
        echo "<p>3 minutos → " . calculateCallCost(3) . " céntimos</p>";
        echo "<p>3.1 minutos → " . calculateCallCost(3.1) . " céntimos</p>";
        echo "<p>5 minutos → " . calculateCallCost(5) . " céntimos</p>";
        echo "<p>Duración negativa → " . calculateCallCost(-5) . "</p>";
        ?>
    </div>
</body>
</html>