<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 2 - Ejercicio 1</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html">🔙 Volver al menú</a></p>
        <?php
        require_once 'InvalidFieldException.php';

        $nombre = trim($_POST['nombre'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');

        try {
            if ($nombre === '') throw new InvalidFieldException("El nombre es obligatorio.");
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) throw new InvalidFieldException("El email no es válido.");
            if ($telefono !== '' && !preg_match('/^\+?[0-9\s\-\(\)]{7,}$/', $telefono)) {
                throw new InvalidFieldException("El teléfono no tiene un formato válido.");
            }

            $nombre = htmlspecialchars($nombre);
            $email = htmlspecialchars($email);
            $telefono = htmlspecialchars($telefono);

            echo "<h3>Datos válidos recibidos:</h3>";
            echo "<p>Nombre: $nombre</p>";
            echo "<p>Email: $email</p>";
            if ($telefono) echo "<p>Teléfono: $telefono</p>";

        } catch (InvalidFieldException $e) {
            echo "<p style='color:red;'>❌ " . $e->getMessage() . "</p>";
            echo '<br><a href="../nivel-1/ejercicio-2-formulario.html">← Volver al formulario</a>';
        }
        ?>
    </div>
</body>
</html>