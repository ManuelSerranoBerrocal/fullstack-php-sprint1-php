<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 2 - Ejercicio 1: Dado de Póker</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        Nivel 2 - Ejercicio 1
        Crea la clase PokerDice. Las caras de un dado de póker tienen las siguientes figuras: As, K, Q, J, 7 y 8.
        Debe tener un método que no haga otra cosa que tirar el dado.
        Crea también otro método que diga cuál es la figura que ha salido en la última tirada del dado en cuestión.
        Después, amplía el programa para poder tirar cinco dados de póker a la vez.
        Además, queremos que la clase PokerDice tenga un método que nos permita ver la cantidad de tiradas de TODOS los dados.
        */
        require_once 'PokerDice.php';

        echo "<h3>Nivel 2 - Ejercicio 1: Dado de Póker</h3>";

        $dice = []; 
        for ($i = 0; $i < 5; $i++) {
            $dice[] = new PokerDice();
        }
        
        foreach ($dice as $index => $die) {
            $result = $die->roll();
            echo "Dado " . ($index + 1) . ": $result<br>";
        }

        echo "<br>Total de tiradas (todos los dados): " . PokerDice::getTotalRolls() . "<br>";
        ?>
    </div>
</body>
</html>