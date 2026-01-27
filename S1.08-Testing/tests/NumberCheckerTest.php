<?php
/*
Nivel 1 - Ejercicio 1
Dada la clase NumberChecker programa los tests unitarios que hagan falta 
para certificar que el código fuente de la clase hace lo que debe hacer.

Nivel 2 - Ejercicio 1
Programa un DataProvider para la clase Test del ejercicio 1 del nivel anterior y utilízalo.
*/
declare(strict_types=1);
namespace Tests;

use App\NumberChecker;

use PHPUnit\Framework\TestCase;

class NumberCheckerTest extends TestCase {
    public function datosEsPar(): array {
        return [
            [2, true],   
            [0, true],  
            [-2, true],  
            [3, false],  
            [-5, false]  
        ];
    }

    /**
     * @dataProvider datosEsPar
    */
    public function testEsPar(int $numero, bool $esperado): void {
        $checker = new NumberChecker();
        $this->assertEquals($esperado, $checker->esPar($numero));
    }

    public function datosEsPositivo(): array {
        return [
            [5, true],   
            [0, false],  
            [-3, false]  
        ];
    }

    /**
     * @dataProvider datosEsPositivo
     */
    public function testEsPositivo(int $numero, bool $esperado): void {
        $checker = new NumberChecker();
        $this->assertEquals($esperado, $checker->esPositivo($numero));
    }
}