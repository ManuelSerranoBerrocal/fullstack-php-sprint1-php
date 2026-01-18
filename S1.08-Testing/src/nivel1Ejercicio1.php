<?php
namespace App;

/**
 * Nivel 1 - Ejercicio 1
 * Clase para verificar propiedades básicas de números.
 */
class Nivel1Ejercicio1
{
   public function esPar(int $numero): bool
    {
        return $numero % 2 === 0;
    }

    public function esPositivo(int $numero): bool
    {
        return $numero > 0;
    }
}