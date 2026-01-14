<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Ejercicio 1- Operaciones con listas de invitados</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        S1.03.Arrays - Nivel 2 - Ejercicio 1
        Imagina que tienes dos listas de invitados (representados únicamente por nombres). 
        Haz un programa que te devuelva:
        La lista de invitados en común entre las dos listas.
        La mezcla de la lista de invitados (sin repeticiones).
        La lista de invitados exclusivos de la primera lista.
        La lista de invitados exclusivos de la segunda lista.
        */

        $list1=[" Ana"," Luis"," Carlos"," María"]; 
        $list2=[" Luis"," María"," Jorge"," Elena"];
        echo"<h2>Ejercicio 1- Operaciones con listas de invitados</h2>";
        echo"Lista 1:". implode(",",$list1)."<br><br>";
        echo"Lista 2:". implode(",",$list2)."<br><br>";
        
        $common= array_intersect($list1,$list2);
        echo"Invitados en común:". implode(",",$common)."<br><br>";

        $combined= array_unique(array_merge($list1,$list2)); 
        echo"Lista combinada:". implode(",",$combined)."<br><br>";

        $onlyList1= array_diff($list1,$list2); 
        echo"Solos sin lo común en lista 1:". implode(",",$onlyList1)."<br><br>"; 

        $onlyList2= array_diff($list2,$list1); 
        echo"Solos sin lo común en lista 2:". implode(",",$onlyList2)."<br><br>"; 

        ?>
    </div>
</body>
</html>