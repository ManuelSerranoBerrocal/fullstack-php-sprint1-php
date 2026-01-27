<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 2- Notas y promedios</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*S1.03.Arrays - Nivel 2 - Ejercicio 2
        Crea un programa que liste las notas de los alumnos de una clase. 
        Para ello deberemos usar un array asociativo donde la clave sea el nombre de cada alumno. 
        Cada alumno tendrá 5 notas (valoradas del 0 al 10).
        Además, crea una función que, dadas las notas de todos los alumnos, 
        nos muestre tanto la media de cada alumno como la nota media de la clase entera.
        mediaCadaAlumno 
        mediaTodalClase
        
        */

        $notasAlumnos = [
            "Mercedes" => [9, 10, 10, 10, 10],
            "Moroni" => [10, 9, 8, 9, 10],
            "Manuel" => [10, 9, 10, 9, 10],
            "Guisela" => [7, 5, 6, 5, 4]
        ];

        function mostrarResumenNotas($notasAlumnos) {
            $mediaCadaAlumno = [];
            $mediaTotalClase = 0; 

            foreach ($notasAlumnos as $alumno => $notas) {
                $media = array_sum($notas) / count($notas);
                $mediaCadaAlumno[$alumno] = $media;
                $mediaTotalClase += $media;

            }

            $mediaTotalClase /= count($notasAlumnos); 

            echo "<h2>Nivel 2 - ejercicio2 - Notas y Promedios</h2>";
            echo "<strong>Notas y Medias Individuales</strong><br><br>";

            foreach ($notasAlumnos as $alumno => $notas) { 
                echo "Notas de $alumno: " . implode(", ", $notas) . "<br>";
                echo "Media de $alumno: " . number_format($mediaCadaAlumno[$alumno], 2) . "<br><br>";

            }

            echo "<strong>Media de la clase: " . number_format($mediaTotalClase, 2) . "</strong><br>";
        } 

        mostrarResumenNotas($notasAlumnos);

        
        ?>
    </div>
</body>
</html>