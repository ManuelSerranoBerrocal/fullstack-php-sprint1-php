

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 3 - Ejercicio 1: Sistema de Notificaciones</title>
    <link rel="stylesheet" href="../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        Nivel 3 - Ejercicio 1
        Imagina que estamos implementando un mecanismo de notificaciones.
        Las notificaciones notifican (como no podía ser de otra manera :)) un mensaje.
        Podemos notificar mediante Email, SMS o Correo ordinario.
        Haz una estructura de clases que nos permita implementar todo ello.
        */
        require_once 'EmailNotifier.php';
        require_once 'SmsNotifier.php';
        require_once 'PostalNotifier.php';

        echo "<h2>Nivel 3 - Ejercicio 1: Sistema de Notificaciones (Polimorfismo)</h2>";

        $message = "Hola, esto es una prueba de notificación.";

        $notifiers = [
            new EmailNotifier("manuel@example.com"),
            new SmsNotifier("+34 600 123 456"),
            new PostalNotifier("Calle Falsa 123, Barcelona")
        ];

        foreach ($notifiers as $notifier) {
            // POLIMORFISMO: todos implementan Notifier, así que tienen send()
            $notifier->send($message);
        }

        echo "<strong>✅ Todos los canales han sido probados.</strong>";
        ?>
    </div>
</body>
</html>