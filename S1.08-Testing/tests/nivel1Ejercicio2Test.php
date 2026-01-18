<?php
namespace Tests;

use App\Nivel1Ejercicio2;
use PHPUnit\Framework\TestCase;

/**
 * Pruebas para Nivel 1 - Ejercicio 2.
 */
class nivel1Ejercicio2Test extends TestCase
{
    /**
     * Data Provider: velocidades y sus niveles esperados.
     * @return array Lista de [velocidad, nivel_esperado].
     */
    public function proveedorVelocidades(): array
    {
        return [
            [0, "Muy lento"],
            [29, "Muy lento"],
            [30, "Velocidad adecuada"],
            [60, "Velocidad adecuada"],
            [61, "Exceso leve"],
            [80, "Exceso leve"],
            [81, "Exceso moderado"],
            [100, "Exceso moderado"],
            [101, "Exceso grave"],
            [200, "Exceso grave"]
        ];
    }

    /**
     * Prueba todos los casos usando el Data Provider.
     * @dataProvider proveedorVelocidades
     */
    public function testObtenerNivelVelocidad(int $velocidad, string $nivelEsperado): void
    {
        $objeto = new Nivel1Ejercicio2();
        $this->assertEquals($nivelEsperado, $objeto->obtenerNivelVelocidad($velocidad));
    }
}