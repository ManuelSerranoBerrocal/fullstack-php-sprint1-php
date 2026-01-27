
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 2 - Ejercicio 2: Trait</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html">🔙 Volver al menú</a></p>
        <?php
        /*
        Nivel 2 - Ejercicio 2
        Implementa una clase Car que contenga información sobre un 
        coche (marca, matrícula, tipo de combustible, velocidad máxima). 
        Además, implementa un Trait llamado Turbo que tenga un método boost() 
        que muestre el mensaje “Se ha iniciado el turbo”. Utiliza este método desde la clase Car.
        */
        require_once 'Car.php';

        echo "<h3>Nivel 2 - Ejercicio 2: Coche con Trait Turbo</h3>";

        $car = new Car("Inka Car", "Chasqui", "Lítio", 380);

        $car->display();

        $car->boost(); 
        ?>
    </div>
</body>
</html>