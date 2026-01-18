<?php
namespace App;

/**
 * Nivel 1 - Ejercicio 2
 * Clase que determina el nivel de velocidad de un vehículo.
 */
class Nivel1Ejercicio2
{
    /**
     * Devuelve el nivel según la velocidad en km/h.
     * @param int $velocidad La velocidad del vehículo.
     * @return string El nivel de velocidad.
     */
    public function obtenerNivelVelocidad(int $velocidad): string
    {
        if ($velocidad < 30) {
            return "Muy lento";
        } elseif ($velocidad <= 60) {
            return "Velocidad adecuada";
        } elseif ($velocidad <= 80) {
            return "Exceso leve";
        } elseif ($velocidad <= 100) {
            return "Exceso moderado";
        } else {
            return "Exceso grave";
        }
    }
}