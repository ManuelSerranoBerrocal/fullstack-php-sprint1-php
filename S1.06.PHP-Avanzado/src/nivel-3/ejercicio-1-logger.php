<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 3 - Logger con Monolog</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html">🔙 Volver al menú</a></p>
        <?php
        /*
        Nivel 3 - Ejercicio 1
        Instala Composer en tu ordenador. Echa un vistazo a alguna librería que te interese e instálala mediante Composer.

        Nivel 3 - Ejercicio 2
        Crea un programa que utilice esta librería.
        */
        // Verificamos que Composer se haya instalado
        if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
            echo "<h3 style='color:red;'>❌ Error: Ejecuta 'composer install' en la carpeta nivel3/</h3>";
            echo "<p>El archivo vendor/autoload.php no existe.</p>";
            exit;
        }

        // Cargamos el autoloader de Composer
        require_once __DIR__ . '/vendor/autoload.php';

        use Monolog\Logger;
        use Monolog\Handler\StreamHandler;

        // Ruta limpia del archivo de log (¡sin espacios!)
        $logFile = __DIR__ . '/app.log';

        // Creamos un logger llamado 's106'
        $log = new Logger('s106');

        // Añadimos un manejador que escribe en app.log
        $log->pushHandler(new StreamHandler($logFile, Logger::INFO));

        // Registramos mensajes
        $log->info("Usuario: Manuel - Migrando de Java a PHP Avanzado");
        $log->warning("Revisa el archivo app.log para ver los registros.");

        // Mostramos resultado
        echo "<h3>Nivel 3 - Uso de librería externa (Monolog)</h3>";

        if (file_exists($logFile)) {
            echo "<p>✅ Log generado correctamente.</p>";
            echo "<p>Contenido del archivo <code>app.log</code>:</p>";
            echo "<pre>" . htmlspecialchars(file_get_contents($logFile)) . "</pre>";
        } else {
            echo "<p style='color:red;'>❌ No se pudo crear el archivo de log. Verifica permisos de escritura en la carpeta nivel3/.</p>";
        }
        ?>
    </div>
</body>
</html>