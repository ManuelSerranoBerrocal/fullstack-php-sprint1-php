<?php
/*
Nivel 1 - Ejercicio 2
Estamos programando la lógica de un sensor de velocidad de vehículos. Los distintos niveles son:

< 30 km/h: Muy lento
30-60 km/h: Velocidad adecuada
61-80 km/h: Exceso leve
81-100 km/h: Exceso moderado
> 100 km/h: Exceso grave

Haz un programa (mediante TDD) que, dada una velocidad concreta, 
te devuelva el umbral correspondiente en función de cómo se ha descrito arriba.

Nivel 2 - Ejercicio 2
Programa un DataProvider para la clase Test del ejercicio 2 del nivel 1 y utilízalo.
*/
declare(strict_types=1);
namespace Tests;

use App\SpeedSensor;
use PHPUnit\Framework\TestCase;
use InvalidArgumentException;

class SpeedSensorTest extends TestCase {
    public function datosVelocidad(): array {
        return [
            [0, 'Muy lento'],
            [29, 'Muy lento'],
            [30, 'Velocidad adecuada'],
            [31, 'Velocidad adecuada'],
            [60, 'Velocidad adecuada'],
            [61, 'Exceso leve'],
            [80, 'Exceso leve'],
            [81, 'Exceso moderado'],
            [100, 'Exceso moderado'],
            [101, 'Exceso grave'],
            [150, 'Exceso grave']
        ];
    }

    /**
     * @dataProvider datosVelocidad
     */
    public function testObtenerNivelVelocidad(int $velocidad, string $esperado): void {
        $sensor = new SpeedSensor();
        $this->assertEquals($esperado, $sensor->obtenerNivelVelocidad($velocidad));
    }

    public function testVelocidadNegativaLanzaExcepcion(): void {
        $this->expectException(InvalidArgumentException::class);
        (new SpeedSensor())->obtenerNivelVelocidad(-10);
    }
}