<?php
declare(strict_types=1);
namespace App;

use InvalidArgumentException;

class SpeedSensor {
    public function obtenerNivelVelocidad(int $velocidad): string {
        if ($velocidad < 0) {
            throw new InvalidArgumentException("La velocidad no puede ser negativa");
        }

        return match(true) {
            $velocidad < 30 => 'Muy lento',
            $velocidad <= 60 => 'Velocidad adecuada',
            $velocidad <= 80 => 'Exceso leve',
            $velocidad <= 100 => 'Exceso moderado',
            default => 'Exceso grave'
        };
    }
}