<?php
/*
Nivel 1 - Ejercicio 2
Recuerda el ejercicio 1 del nivel 1 del tema 6 (PHP Avanzado).
Programa en PHP varias normas de validación para los campos del formulario. 
Por ejemplo, que el campo no esté vacío o que cumpla determinadas circunstancias simples, 
como ser un número en caso de tratarse de un campo numérico.
*/

// Variables para mensajes
$mensajeError = null;
$mensajeExito = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener y limpiar los datos
    $nombre = trim($_POST['nombre'] ?? '');
    $edad = $_POST['edad'] ?? '';
    $email = trim($_POST['email'] ?? '');

    // Validar nombre (no vacío)
    if (empty($nombre)) {
        $mensajeError = "El nombre no puede estar vacío.";
    }
    // Validar edad (número positivo)
    elseif (!is_numeric($edad) || $edad <= 0) {
        $mensajeError = "La edad debe ser un número positivo.";
    }
    // Validar email (formato válido)
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $mensajeError = "El email no tiene un formato válido.";
    }
    else {
        $mensajeExito = "¡Datos válidos! Hola, $nombre. Tienes $edad años y tu email es $email.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 1 - Ejercicio 2</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Formulario con validación básica</h1>

    <form method="POST">
        <div class="grupo-formulario">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" 
                   value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>" required>
        </div>

        <div class="grupo-formulario">
            <label for="edad">Edad:</label>
            <input type="number" id="edad" name="edad" 
                   value="<?= htmlspecialchars($_POST['edad'] ?? '') ?>" min="1" required>
        </div>

        <div class="grupo-formulario">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" 
                   value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
        </div>

        <button type="submit">Enviar datos</button>
    </form>

    <?php if ($mensajeError): ?>
        <div class="alerta alerta-error"><?= htmlspecialchars($mensajeError) ?></div>
    <?php elseif ($mensajeExito): ?>
        <div class="alerta alerta-exito"><?= htmlspecialchars($mensajeExito) ?></div>
    <?php endif; ?>
</body>
</html>