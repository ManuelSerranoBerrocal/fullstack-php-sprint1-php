<?php
namespace Tests;

use App\Nivel2Ejercicio1;
use PHPUnit\Framework\TestCase;

/**
 * Pruebas para Nivel 2 - Ejercicio 1 (con Data Providers).
 */
class nivel2Ejercicio1Test extends TestCase
{
    /**
     * Data Provider para números pares.
     * @return array Lista de números pares.
     */
    public function proveedorPares(): array
    {
        return [[2], [0], [-2], [100]];
    }

    /**
     * Data Provider para números impares.
     * @return array Lista de números impares.
     */
    public function proveedorImpares(): array
    {
        return [[1], [-1], [3], [99]];
    }

    /**
     * Prueba números pares con Data Provider.
     * @dataProvider proveedorPares
     */
    public function testEsPar(int $numero): void
    {
        $objeto = new Nivel2Ejercicio1();
        $this->assertTrue($objeto->esPar($numero));
    }

    /**
     * Prueba números impares con Data Provider.
     * @dataProvider proveedorImpares
     */
    public function testEsImpar(int $numero): void
    {
        $objeto = new Nivel2Ejercicio1();
        $this->assertFalse($objeto->esPar($numero));
    }
}