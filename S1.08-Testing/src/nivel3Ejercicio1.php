<?php
namespace App;

/**
 * Nivel 3 - Ejercicio 1
 * Clase Libro: representa un libro en la biblioteca.
 */
class Libro
{
    private string $titulo;
    private string $autor;
    private string $isbn;
    private string $genero;
    private int $paginas;

    public function __construct(string $titulo, string $autor, string $isbn, string $genero, int $paginas)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->genero = $genero;
        $this->paginas = $paginas;
    }

    // Getters
    public function getTitulo(): string { return $this->titulo; }
    public function getAutor(): string { return $this->autor; }
    public function getIsbn(): string { return $this->isbn; }
    public function getGenero(): string { return $this->genero; }
    public function getPaginas(): int { return $this->paginas; }
}

/**
 * Clase Biblioteca: gestiona una colección de libros.
 */
class Nivel3Ejercicio1
{
    private array $libros = [];

    public function agregarLibro(Libro $libro): void
    {
        $this->libros[] = $libro;
    }

    public function eliminarLibroPorIsbn(string $isbn): bool
    {
        foreach ($this->libros as $indice => $libro) {
            if ($libro->getIsbn() === $isbn) {
                unset($this->libros[$indice]);
                return true;
            }
        }
        return false;
    }

    public function buscarPorTitulo(string $titulo): array
    {
        return array_filter($this->libros, fn($libro) => stripos($libro->getTitulo(), $titulo) !== false);
    }

    public function buscarPorGenero(string $genero): array
    {
        return array_filter($this->libros, fn($libro) => $libro->getGenero() === $genero);
    }

    public function getLibrosGrandes(): array
    {
        return array_filter($this->libros, fn($libro) => $libro->getPaginas() > 500);
    }
}