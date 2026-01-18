<?php
/*
Nivel 2 - Ejercicio 1
Crea excepciones personalizadas para tratar los posibles errores que puedan existir 
en la validación del formulario del ejercicio anterior.
*/

// Excepción personalizada para errores de validación
// En las empresas, las excepciones personalizadas ayudan a identificar errores específicos
class DatoInvalidoException extends Exception
{
    // No necesitamos métodos adicionales, solo el mensaje de error
}