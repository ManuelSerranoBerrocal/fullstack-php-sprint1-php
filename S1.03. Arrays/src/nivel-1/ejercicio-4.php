<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 4 - Información personal</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        S1.03.Arrays - Nivel 1 - Ejercicio 4
        Haz un array asociativo que represente información sobre ti mismo/a. En concreto debe incluir:
        nombre
        edad
        email
        comida favorita
        */
 
        $personalInfo = [
            "nombre" => "Manel",
            "edad" => 44,
            "email" => "manuelssoftware@gmail.com",
            "comida favorita" => "Gastromomía Peruana"
        ];

        echo "<h2>Ejercicio 4 - Información personal</h2>";

        foreach ($personalInfo as $clave => $valor) {
            echo "<strong>" . ucfirst($clave) . ":</strong> " . htmlspecialchars($valor) . "<br><br>";
        }
        echo '<img src="../../public/img/gastronomiaperuana.jpg" alt="Gastronomía Peruana" style="max-width: 300px; border: 2px solid #3182ce; border-radius: 8px; margin-top: 20px;">';
        ?>
    </div>
</body>