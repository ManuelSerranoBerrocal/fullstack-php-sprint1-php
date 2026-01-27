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
        /*
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
        */
        function calculatotalcost($duracion) {
            if ($duracion < 0){
                return "Error ❌: La duración de la llkamada no puede sewr negativo";

            }
            if($duracion < 3){
                return 10;
            }
            $minutosExtras = $duracion -3 ;
            $minutosExtras = ceil($minutosExtras);
            return 10 + ($minutosExtras * 5 );
        }
        // Pruebas 
        echo "<h2>Ejercicio 1 - Costo de llamadas telefónicas</h2>";
        echo "<p>2.5 minutos → " . calculatotalcost(2.5) . " céntimos</p>";
        echo "<p>3 minutos → " . calculatotalcost(3) . " céntimos</p>";
        echo "<p>3.1 minutos → " . calculatotalcost(3.1) . " céntimos</p>";
        echo "<p>5 minutos → " . calculatotalcost(5) . " céntimos</p>";
        echo "<p style='color:red;'>Duración negativa → " . calculatotalcost(-5) . "</p>";
        function generarNumerosAleatorios($cantidad, $min, $max) {
            $numerosAleatorios = [];
            for ($i = 0; $i < $cantidad; $i++) {
                $numerosAleatorios[] = rand($min, $max);
            }
            return $numerosAleatorios;
        }
        
        echo "<h2>Ejercicio 1.1 - Llamadas aleatorias</h2>";

        $duraciones = generarNumerosAleatorios(5, 1, 10);

        foreach ($duraciones as $duracion) {
            echo "<p>$duracion minutos → " . calculatotalcost($duracion) . " céntimos</p>";
        }

        ?>
    </div>
</body>
</html>