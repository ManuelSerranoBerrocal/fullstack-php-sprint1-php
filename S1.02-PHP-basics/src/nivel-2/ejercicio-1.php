<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1 - Costo de llamadas</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        Nivel 2 - Ejercicio 1
        Escribe una función que determine la cantidad total a pagar 
        por una llamada telefónica según las siguientes premisas:
        Toda llamada que dure menos de 3 minutos tiene un coste de 10 céntimos.
        Cada minuto adicional, a partir de los 3 primeros, supone un paso de contador y cuesta 5 céntimos.
        */

        function calculateCallCost($minutes) {
           if ($minutes < 0) {
                return "Error: duración no válida";
            }
            
            if ($minutes < 3) {
                return 10;
            }
            
            $extraMinutes = $minutes - 3;
            
            $extraMinutes = ceil($extraMinutes);
            
            return 10 + ($extraMinutes * 5);
        }

        // Pruebas
        echo "<h2>Ejercicio 1 - Costo de llamadas telefónicas</h2>";
        echo "<p>2.5 minutos → " . calculateCallCost(2.5) . " céntimos</p>";
        echo "<p>3 minutos → " . calculateCallCost(3) . " céntimos</p>";
        echo "<p>3.1 minutos → " . calculateCallCost(3.1) . " céntimos</p>";
        echo "<p>5 minutos → " . calculateCallCost(5) . " céntimos</p>";
        echo "<p style='color:red;'>Duración negativa → " . calculateCallCost(-5) . "</p>";
        ?>
    </div>
</body>
</html>