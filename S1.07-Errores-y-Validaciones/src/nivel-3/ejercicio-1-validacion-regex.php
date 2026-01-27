
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 3 - Ejercicio 1</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html">🔙 Volver al menú</a></p>
        <?php
        /*
        Nivel 3 - Ejercicio 1
        En caso de tener campos de texto en el formulario de los ejercicios anteriores, 
        puede ser que sea necesario que estas sentencias de texto deban cumplir un patrón 
        concreto (por ejemplo, formato email, número de teléfono…).

        Valida esta corrección mediante filtros o expresiones regulares.
        */ 
        $nombre = trim($_POST['nombre'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');

        $errores = [];

        if ($nombre === '') $errores[] = "El nombre es obligatorio.";
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errores[] = "El email no es válido.";
        if ($telefono !== '' && !preg_match('/^\+?[0-9\s\-\(\)]{7,}$/', $telefono)) {
            $errores[] = "El teléfono no tiene un formato válido.";
        }

        if (!empty($errores)) {
            foreach ($errores as $error) echo "<p style='color:red;'>❌ $error</p>";
            echo '<br><a href="../nivel-1/ejercicio-2-formulario.html">← Volver al formulario</a>';
            exit;
        }

        $nombre = htmlspecialchars($nombre);
        $email = htmlspecialchars($email);
        $telefono = htmlspecialchars($telefono);

        echo "<h3>Datos válidos:</h3>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Email: $email</p>";
        if ($telefono) echo "<p>Teléfono: $telefono</p>";
        ?>
    </div>
</body>
</html>