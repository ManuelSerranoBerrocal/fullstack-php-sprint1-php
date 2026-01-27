<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 1 - Ejercicio 1: Formulario + Sesión</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html">🔙 Volver al menú</a></p>

        <?php
        /*
        Nivel 1 - Ejercicio 1
        Crea un formulario HTML con los campos que quieras (al menos un nombre o username). 
        El formulario debe tener como action un documento PHP. 
        El código de este documento PHP deberá mostrar los valores de los diferentes campos del formulario 
        mediante variables superglobales. Registra además, algunos de estos valores dentro de variables de sesión.
        */

        session_start();

        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            die("Acceso no permitido. Por favor, usa el formulario.");
        }

        $nombre = trim($_POST['nombre'] ?? '');       
        $email = trim($_POST['email'] ?? ''); 
        $mensaje = trim($_POST['mensaje'] ?? ''); // 
        $pensamiento = trim($_POST['pensamiento'] ?? '');

        if ($nombre === '') {
            $nombre = 'Invitado';  
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
            $email = 'Email inválido'; 
        }

        $nombre = htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'); //
        $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
        $mensaje = htmlspecialchars($mensaje, ENT_QUOTES, 'UTF-8');
        $pensamiento = htmlspecialchars($pensamiento, ENT_QUOTES, 'UTF-8');

        $_SESSION['usuario_nombre'] = $nombre;
        $_SESSION['usuario_email'] = $email;
        $_SESSION['usuario_pensamiento'] = $pensamiento;

        echo "<h2>Nivel 1 - Ejercicio 1 - Datos recibidos del formulario:</h2>";
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Mensaje:</strong> $mensaje</p>";
        echo "<p><strong>Pensamiento:</strong> $pensamiento</p>";

        echo "<h4>Datos guardados en SESIÓN:</h4>";
        echo "<p>Nombre: " . $_SESSION['usuario_nombre'] . "</p>";
        echo "<p>Email: " . $_SESSION['usuario_email'] . "</p>";
        echo "<p>Pensamiento: " . $_SESSION['usuario_pensamiento'] . "</p>";


        ?>
    </div>
</body>
</html>