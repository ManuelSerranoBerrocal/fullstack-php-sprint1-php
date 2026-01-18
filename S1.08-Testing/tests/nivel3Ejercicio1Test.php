<?php
namespace Tests;

use App\Libro;
use App\Nivel3Ejercicio1;
use PHPUnit\Framework\TestCase;

/**
 * Pruebas para Nivel 3 - Ejercicio 1.
 */
class nivel3Ejercicio1Test extends TestCase
{
    private Nivel3Ejercicio1 $biblioteca;

    /**
     * Se ejecuta antes de cada prueba.
     */
    protected function setUp(): void
    {
        $this->biblioteca = new Nivel3Ejercicio1();
        $this->biblioteca->agregarLibro(new Libro("El Señor de los Anillos", "J.R.R. Tolkien", "978-0", "Fantástico", 1200));
        $this->biblioteca->agregarLibro(new Libro("1984", "George Orwell", "978-1", "Distopia", 328));
    }

    public function testAgregarLibro(): void
    {
        $libro = new Libro("Dune", "Frank Herbert", "978-2", "Ciencia-ficción", 600);
        $this->biblioteca->agregarLibro($libro);
        $resultados = $this->biblioteca->buscarPorTitulo("Dune");
        $this->assertCount(1, $resultados);
    }

    public function testEliminarLibroPorIsbn(): void
    {
        $resultado = $this->biblioteca->eliminarLibroPorIsbn("978-0");
        $this->assertTrue($resultado);
        $resultados = $this->biblioteca->buscarPorTitulo("El Señor de los Anillos");
        $this->assertCount(0, $resultados);
    }

    public function testBuscarPorGenero(): void
    {
        $resultados = $this->biblioteca->buscarPorGenero("Distopia");
        $this->assertCount(1, $resultados);
        $this->assertEquals("1984", current($resultados)->getTitulo());
    }

    public function testGetLibrosGrandes(): void
    {
        $librosGrandes = $this->biblioteca->getLibrosGrandes();
        $this->assertCount(1, $librosGrandes);
        $this->assertEquals("El Señor de los Anillos", current($librosGrandes)->getTitulo());
    }
}