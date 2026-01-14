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
        nos muestre tanto la media de cada alumno como la nota media de la clase entera.*/
        $notasAlumnos=[ "Ana"=>[8, 7, 9, 6, 8], "Luis"=>[5, 6, 4, 7, 5], "Carlos"=>[10, 9, 9, 8, 10] ];
        function mostrarNotasYPromedios($notasAlumnos){ 
            $totalClase= 0;
        $numAlumnos= count($notasAlumnos); 
        
        echo"<h2>Ejercicio 2- Notas y promedios</h2>";
        
        echo"<strong>Memedias individuales de cada alumno:</strong><br><br>"; 
        
        foreach($notasAlumnos as$alumno=>$notasAlumno){ 
            $mediaAlumno= array_sum($notasAlumno)/ count($notasAlumno); 
            echo"Media de $alumno:". number_format($mediaAlumno, 2)."<br>"; 
            $totalClase+=$mediaAlumno;
        }
        echo"<br><br><strong>Notas individuales y medias individuales:</strong><br><br>";
        
        foreach($notasAlumnos as$alumno=>$notasAlumno){ 
            echo"Notas de $alumno:". implode(",",$notasAlumno)."<br>"; 
            $mediaAlumno= array_sum($notasAlumno)/ count($notasAlumno); 
            echo"Media de $alumno:". number_format($mediaAlumno, 2)."<br><br>";
        }
        
        $mediaClase=$totalClase/$numAlumnos;
        echo"<strong>Media de la clase: ". number_format($mediaClase, 2)."</strong><br>";
        }
         
        mostrarNotasYPromedios($notasAlumnos); 
        ?>
    </div>
</body>
</html>