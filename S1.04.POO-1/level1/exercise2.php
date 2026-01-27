<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 1 - Ejercicio 2: Herencia</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        Nivel 1 - Ejercicio 2
        Escribe un programa que defina una clase Shape con un constructor 
        que reciba como parámetros el ancho y alto. 
        Define dos subclases; Triangle y Rectangle que hereden de Shape 
        y que calculen respectivamente el área con un método.
        */
        require_once 'Rectangle.php';
        require_once 'Triangle.php';

        echo "<h2>Nivel 1 - Ejercicio 2: Herencia (Forma, Rectángulo, Triángulo)</h2>";

        $rectangle = new Rectangle(3, 7);
        $triangle = new Triangle(4, 10);

        echo "Área del rectángulo: " . $rectangle->calculateArea() . "<br>";
        echo "Área del triángulo: " . $triangle->calculateArea() . "<br>";
        ?>
    </div>
</body> 
</html>
