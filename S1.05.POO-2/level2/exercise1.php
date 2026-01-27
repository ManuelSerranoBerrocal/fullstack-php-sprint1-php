

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 2 - Ejercicio 1: Círculo y otras figuras</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        Nivel 2 - Ejercicio 1
        Siguiendo el ejercicio anterior, imagina cómo ampliarías la estructura que 
        has creado para representar un Círculo y su correspondiente cálculo de área.
        */
        require_once 'Rectangle.php';
        require_once 'Triangle.php';
        require_once 'Circle.php';

        echo "<h2>Nivel 2 - Ejercicio 1: Figuras Geométricas con Interfaz Común</h2>";

        $shapes = [   
            new Rectangle(5, 3),
            new Triangle(4, 6),
            new Circle(5)
        ];

        // Recorremos todas las figuras
        foreach ($shapes as $shape) {
            // Llamamos a los mismos métodos en todos los objetos
            echo $shape->getDescription() . " → Área: " . number_format($shape->getArea(), 2) . "<br>";
        } 
        ?>
    </div>
</body>
</html>