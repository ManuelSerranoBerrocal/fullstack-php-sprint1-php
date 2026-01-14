<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 5 - Grado según nota</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        Escribe una función que verifique el grado de un estudiante según su nota (%).
        Condiciones:
        - 60% o más --> Primera División
        - 45% a 59% --> Segunda División  
        - 33% a 44% --> Tercera División
        - Menos de 33% --> Reprobado
        */

        define('PRIMERA_DIVISION', 60);
        define('SEGUNDA_DIVISION', 45);
        define('TERCERA_DIVISION', 33);

        function obtenerGrado($nota) {
            if ($nota < 0 || $nota > 100) {
                return "Nota fuera de rango";
                
            }

            if ($nota >= PRIMERA_DIVISION) {
                return "Primera División";
            }
            if ($nota >= SEGUNDA_DIVISION) {
                return "Segunda División";
            }
            if ($nota >= TERCERA_DIVISION) {
                return "Tercera División";
            }
            
            return "Reprobado";
        }

        echo "<h2>Ejercicio 5 - Grado según nota</h2>";
        echo "<p>Nota 85 → " . obtenerGrado(85) . "</p>";
        echo "<p>Nota 50 → " . obtenerGrado(50) . "</p>";
        echo "<p>Nota 40 → " . obtenerGrado(40) . "</p>";
        echo "<p>Nota 20 → " . obtenerGrado(20) . "</p>";
        echo "<p style='color:red;'>Nota 151 → " . obtenerGrado(151) . "</p>";
        ?>
    </div>
</body>
</html>