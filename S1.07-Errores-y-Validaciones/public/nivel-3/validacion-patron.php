<?php
/*
Nivel 3 - Ejercicio 1
En caso de tener campos de texto en el formulario de los ejercicios anteriores, 
puede ser necesario que estas cadenas de texto cumplan un patrón concreto 
(por ejemplo, formato de correo electrónico, número de teléfono…).
Valida esta corrección mediante filtros o expresiones regulares.
*/

// Variables para mensajes
$mensajeError = null;
$mensajeExito = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $telefono = trim($_POST['telefono'] ?? '');

    // Patrón para teléfono: permite dígitos, espacios y guiones (9-15 caracteres)
    // Ejemplos válidos: "612345678", "612 34 56 78", "612-34-56-78"
    if (!preg_match('/^[\d\s\-]{9,15}$/', $telefono)) {
        $mensajeError = "El teléfono debe contener entre 9 y 15 dígitos (puedes usar espacios o guiones).";
    } else {
        // Limpiar el teléfono: quitar todo excepto dígitos
        $telefonoLimpio = preg_replace('/[^\d]/', '', $telefono);
        
        // Validar longitud exacta (9 dígitos para España)
        if (strlen($telefonoLimpio) != 9) {
            $mensajeError = "El teléfono debe tener exactamente 9 dígitos.";
        } 
        // Validar que no sea solo ceros
        elseif ($telefonoLimpio === str_repeat('0', strlen($telefonoLimpio))) {
            $mensajeError = "El teléfono no puede ser solo ceros.";
        } else {
            $mensajeExito = "Teléfono válido: $telefonoLimpio";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 3 - Ejercicio 1</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>Validación con expresión regular (teléfono)</h1>

    <form method="POST">
        <div class="grupo-formulario">
            <label>Teléfono (ej: 612 34 56 78):</label>
            <input type="text" name="telefono" 
                   value="<?= htmlspecialchars($_POST['telefono'] ?? '') ?>" 
                   placeholder="612 34 56 78" required>
        </div>
        <button type="submit">Validar teléfono</button>
    </form>

    <?php if ($mensajeError): ?>
        <div class="alerta alerta-error"><?= htmlspecialchars($mensajeError) ?></div>
    <?php elseif ($mensajeExito): ?>
        <div class="alerta alerta-exito"><?= htmlspecialchars($mensajeExito) ?></div>
    <?php endif; ?>
</body>
</html>