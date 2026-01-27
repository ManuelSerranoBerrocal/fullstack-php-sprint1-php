

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 2 - Ejercicio 1: Enums</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html">🔙 Volver al menú</a></p>
        <?php
        /*
        Nivel 2 - Ejercicio 1
        Crea una clase que represente un recurso didáctico de esta especialidad. 
        Los recursos deberán tener un nombre, un tema (que solo podrá ser PHP, CSS, HTML, SQL, Laravel), 
        una URL y un tipo de recurso (Archivo, Artículo web, Vídeo). 
        Implementa tanto el tema como el tipo de recurso con enums.
        */ 
        require_once 'EducationalResource.php';

        echo "<h3>Nivel 2 - Ejercicio 1: Recurso Didáctico con Enums</h3>";

        try {
            $resource1 = new EducationalResource(
                "Guía de PHP Moderno",
                Topic::PHP,
                "https://php.net",
                ResourceType::ARTICLE
            );

            $resource2 = new EducationalResource(
                "Curso de Laravel",
                Topic::LARAVEL,
                "https://laravel.com",
                ResourceType::VIDEO
            );

            $resource1->display();
            $resource2->display();
        } catch (InvalidArgumentException $e) {
            echo "<p style='color:red;'>Error: " . $e->getMessage() . "</p>";
        }
        ?>
    </div>
</body>
</html>