
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 1 - Ejercicio 2</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html">🔙 Volver al menú</a></p>
        <?php
        /* 
        Nivel 1 - Ejercicio 2
        Recuerda el ejercicio 1 del nivel 1 del tema 6 (PHP Avanzado).

        Programa en PHP diversas normas de validación para los campos del formulario. 
        Como por ejemplo que el campo no esté vacío o que cumpla determinadas circunstancias 
        simples como ser un número en caso de ser un campo numérico.
        */
        $nombre = trim($_POST['nombre'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');

        if ($nombre === '') {
            echo "<p style='color:red;'>❌ El nombre es obligatorio.</p>";
            exit;
        }
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p style='color:red;'>❌ El email no es válido.</p>";
            exit;
        }

        $nombre = htmlspecialchars($nombre);
        $email = htmlspecialchars($email);
        $telefono = htmlspecialchars($telefono);

        echo "<h3>Datos válidos recibidos:</h3>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Email: $email</p>";
        if ($telefono) echo "<p>Teléfono: $telefono</p>";
        ?>
    </div>
</body>
</html>