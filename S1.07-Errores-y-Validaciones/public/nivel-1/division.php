<?php
/*
Nivel 1 - Ejercicio 1
Un caso clásico de situación que nos puede generar una excepción sería dividir un número entre 0.
Haz un programa en el que se pueda producir esta situación y gestiona este error con una sentencia try-catch.
*/

// Variables para almacenar mensajes
$mensajeError = null;
$resultado = null;

// Verificar si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los valores del formulario
    $dividendo = $_POST['dividendo'] ?? '';
    $divisor = $_POST['divisor'] ?? '';

    // Validar que ambos campos sean números
    if (!is_numeric($dividendo) || !is_numeric($divisor)) {
        $mensajeError = "Por favor, ingresa números válidos en ambos campos.";
    } else {
        // Convertir a números decimales (para permitir 3.5, etc.)
        $dividendo = (float)$dividendo;
        $divisor = (float)$divisor;

        try {
            // Intentar realizar la división
            if ($divisor == 0) {
                // Lanzar una excepción manualmente (PHP no lanza excepción automática al dividir por cero)
                throw new Exception("No se puede dividir por cero.");
            }
            $resultado = $dividendo / $divisor;
        } catch (Exception $e) {
            // Capturar la excepción y guardar el mensaje de error
            $mensajeError = $e->getMessage();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 1 - Ejercicio 1</title>
    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <h1>División segura con manejo de errores</h1>

    <!-- Formulario para ingresar los números -->
    <form method="POST">
        <div class="grupo-formulario">
            <label for="dividendo">Dividendo:</label>
            <input type="number" step="any" id="dividendo" name="dividendo" 
                   value="<?= htmlspecialchars($_POST['dividendo'] ?? '') ?>" required>
        </div>

        <div class="grupo-formulario">
            <label for="divisor">Divisor:</label>
            <input type="number" step="any" id="divisor" name="divisor" 
                   value="<?= htmlspecialchars($_POST['divisor'] ?? '') ?>" required>
        </div>

        <button type="submit">Calcular división</button>
    </form>

    <!-- Mostrar resultado o error -->
    <?php if ($mensajeError): ?>
        <div class="alerta alerta-error"><?= htmlspecialchars($mensajeError) ?></div>
    <?php elseif ($resultado !== null): ?>
        <div class="alerta alerta-exito">Resultado: <?= number_format($resultado, 2) ?></div>
    <?php endif; ?>
</body>
</html>