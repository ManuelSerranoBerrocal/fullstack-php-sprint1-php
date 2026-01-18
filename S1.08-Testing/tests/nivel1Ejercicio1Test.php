<?php
namespace Tests;

use App\Nivel1Ejercicio1;
use PHPUnit\Framework\TestCase;

/**
 * Pruebas para Nivel 1 - Ejercicio 1.
 */
class nivel1Ejercicio1Test extends TestCase
{
    /**
     * Prueba que números pares devuelven true.
     */
    public function testEsParConNumerosPares(): void
    {
        $objeto = new Nivel1Ejercicio1();
        $this->assertTrue($objeto->esPar(2));
        $this->assertTrue($objeto->esPar(0));   // 0 es par
        $this->assertTrue($objeto->esPar(-4));  // -4 es par
    }

    /**
     * Prueba que números impares devuelven false.
     */
    public function testEsParConNumerosImpares(): void
    {
        $objeto = new Nivel1Ejercicio1();
        $this->assertFalse($objeto->esPar(1));
        $this->assertFalse($objeto->esPar(3));
        $this->assertFalse($objeto->esPar(-5));
    }

    /**
     * Prueba que números positivos devuelven true.
     */
    public function testEsPositivoConNumerosPositivos(): void
    {
        $objeto = new Nivel1Ejercicio1();
        $this->assertTrue($objeto->esPositivo(1));
        $this->assertTrue($objeto->esPositivo(100));
    }

    /**
     * Prueba que números no positivos devuelven false.
     */
    public function testEsPositivoConNumerosNoPositivos(): void
    {
        $objeto = new Nivel1Ejercicio1();
        $this->assertFalse($objeto->esPositivo(0));   // 0 no es positivo
        $this->assertFalse($objeto->esPositivo(-1));
        $this->assertFalse($objeto->esPositivo(-10));
    }
}