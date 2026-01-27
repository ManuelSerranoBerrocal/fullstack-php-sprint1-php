
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 1 - Ejercicio 2: Figuras con Clase Abstracta</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        S1.05 - POO2
        Nivel 1 - Ejercicio 2
        Escribe un programa que defina una clase Shape con un constructor que reciba como parámetros el ancho y alto. 
        Define dos subclases; Triangle y Rectangle que hereden de Shape y que calculen respectivamente el área de la figura.
        Importante
        Sí, es el mismo ejercicio que en POO1, pero aquí necesitamos que lo resuelvas aplicando alguno de los conceptos del tema POO2.
        */
        require_once 'Rectangle.php';
        require_once 'Triangle.php';

        echo "<h2>Nivel 1 - Ejercicio 2: Figuras Geométricas (Clase Abstracta)</h2>";

        $rectangle = new Rectangle(5, 3);  
        $triangle = new Triangle(4, 6);   

        echo "Área del rectángulo: " . $rectangle->calculateArea() . "<br>";
        echo "Área del triángulo: " . $triangle->calculateArea() . "<br>";

        // También podemos usar polimorfismo con un array
        $shapes = [$rectangle, $triangle];
        echo "<h2>Usando polimorfismo:</h2><br>";
        foreach ($shapes as $shape) {
            //Estos son tipos distintos, pero responden al mismo método por que son subclases de Shape
            echo "Área: " . $shape->calculateArea() . "<br>";
        } 
        ?>
    </div>
</body>
</html>