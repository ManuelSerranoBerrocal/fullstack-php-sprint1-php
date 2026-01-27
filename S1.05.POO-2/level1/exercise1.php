<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 1 - Ejercicio 1: Polimorfismo con Animales</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>
<body>
    <div class="container">
        <!-- Enlace para volver al menú principal -->
        <p><a href="../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        Nivel 1 - Ejercicio 1
        Necesitamos crear un tipo de datos que represente un animal. 
        Los animales tienen un nombre y "hablan". Debemos tener en cuenta, sin embargo, que no es el mismo 
        el sonido del “habla” de un perro que el de un gato, por ejemplo. Por lo tanto, necesitamos crear 
        otros tipos de datos que nos ayuden a programar estos comportamientos entre diferentes animales.
        Crea al menos 2 animales.
        */
        // Cargamos las clases que vamos a usar
        require_once 'Dog.php';
        require_once 'Cat.php';

        echo "<h2>Nivel 1 - Ejercicio 1: Animales y Polimorfismo</h2>";

        $animals = [
            new Dog("Odye"),      
            new Cat("Garfield")   
        ];

        foreach ($animals as $animal) {
            echo $animal->getName() . " dice: " . $animal->speak() . "<br>";
        }
        ?>
    </div>
</body>
</html>