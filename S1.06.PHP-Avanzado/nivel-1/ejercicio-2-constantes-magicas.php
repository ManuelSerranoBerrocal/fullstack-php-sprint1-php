<?php
/*
Nivel 1 - Ejercicio 2
Objetivo: Usar al menos dos constantes mágicas de PHP.
Las constantes mágicas se evalúan en tiempo de compilación.
Son útiles para depuración, logging y rutas dinámicas.
*/

function mostrarContexto() {
    echo "<h3>Constantes mágicas en acción:</h3>";
    
    echo "<p><strong>Archivo actual:</strong> " . __FILE__ . "</p>";
    
    echo "<p><strong>Línea de este echo:</strong> " . __LINE__ . "</p>";
    
    echo "<p><strong>Función actual:</strong> " . __FUNCTION__ . "</p>";
    
    echo "<p><strong>Directorio del script:</strong> " . __DIR__ . "</p>";
    
    
}

mostrarContexto();

echo "<p><strong>Línea final del script:</strong> " . __LINE__ . "</p>";
?>