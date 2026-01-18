<?php
/*
Nivel 2 - Ejercicio 1
Crea excepciones personalizadas para tratar los posibles errores que puedan existir 
en la validación del formulario del ejercicio anterior.
*/

// Incluir la excepción personalizada
require_once __DIR__ . '/../../src/Excepciones/DatoInvalidoException.php';

// Funciones de validación (cada una hace una sola cosa → principio de responsabilidad única)
function validarNombre(string $nombre): string
{
    $nombreLimpio = trim($nombre);
    if (empty($nombreLimpio)) {
        throw new DatoInvalidoException("El nombre no puede estar vacío.");
    }
    return $nombreLimpio;
}

function validarEdad(string $edad): int
{
    if (!is_numeric($edad) || $edad <= 0) {
        throw new DatoInvalidoException("La edad debe ser un número positivo.");
    }
    return (int)$edad;
}

function validarEmail(string $email): string
{
    $emailLimpio = trim($email);
    if (!filter_var($emailLimpio, FILTER_VALIDATE_EMAIL)) {
        throw new DatoInvalidoException("El email no tiene un formato válido.");
    }
    return $emailLimpio;
}

// Variables para mensajes
$mensajeError = null;
$mensajeExito = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Validar cada campo usando las funciones
        $nombre = validarNombre($_POST['nombre'] ?? '');
        $edad = validarEdad($_POST['edad'] ?? '');
        $email = validarEmail($_POST['email'] ?? '');
        
        $mensajeExito = "¡Validación exitosa! Hola, $nombre.";
    } catch (DatoInvalidoException $e) {
        // Capturar solo errores de validación (no otros tipos de errores)
        $mensajeError = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 2 - Ejercicio 1</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Formulario con excepciones personalizadas</h1>

    <form method="POST">
        <div class="grupo-formulario">
            <label>Nombre:</label>
            <input type="text" name="nombre" value="<?= htmlspecialchars($_POST['nombre'] ?? '') ?>" required>
        </div>
        <div class="grupo-formulario">
            <label>Edad:</label>
            <input type="number" name="edad" value="<?= htmlspecialchars($_POST['edad'] ?? '') ?>" min="1" required>
        </div>
        <div class="grupo-formulario">
            <label>Email:</label>
            <input type="email" name="email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>" required>
        </div>
        <button type="submit">Validar con excepciones</button>
    </form>

    <?php if ($mensajeError): ?>
        <div class="alerta alerta-error"><?= htmlspecialchars($mensajeError) ?></div>
    <?php elseif ($mensajeExito): ?>
        <div class="alerta alerta-exito"><?= htmlspecialchars($mensajeExito) ?></div>
    <?php endif; ?>
</body>
</html>