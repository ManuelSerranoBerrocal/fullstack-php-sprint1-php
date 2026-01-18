<?php
namespace Tests;

use App\Nivel2Ejercicio2;
use PHPUnit\Framework\TestCase;

/**
 * Pruebas para Nivel 2 - Ejercicio 2 (con Data Providers).
 */
class nivel2Ejercicio2Test extends TestCase
{
    /**
     * Data Provider: mismo que en Nivel 1, pero reutilizado.
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
     * Prueba con Data Provider.
     * @dataProvider proveedorVelocidades
     */
    public function testVelocidad(int $velocidad, string $nivelEsperado): void
    {
        $objeto = new Nivel2Ejercicio2();
        $this->assertEquals($nivelEsperado, $objeto->obtenerNivelVelocidad($velocidad));
    }
}