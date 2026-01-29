<?php
/*
 Nivel 3 - Ejercicio 1
Necesitamos crear un pequeño software para el tratamiento de información en una biblioteca. Por eso necesitamos representar la información de un libro, que tiene:

Un título
Un autor/autora
Un ISBN
Un género, que puede ser: Aventuras, Ciencia-ficción, Cuento, Novela Policial, Paranormal, Distopía, Fantástico.
nº. de páginas.
Necesitamos almacenar el conjunto de libros y tener métodos que:

Añadan, borren y modifiquen un libro de la librería.
Permitan consultar libros por título, género, ISBN o autor.
Devolver libros grandes (más de 500 páginas).
Desarrolla mediante TDD este programa para garantizar que cumple con todas las funcionalidades solicitadas por el enunciado.
 */

declare(strict_types=1);

namespace Tests;

use App\Book;

use App\Library;

use PHPUnit\Framework\TestCase;

class LibraryTest extends TestCase
{
    private Library $library;

    private array $books;

    protected function setUp(): void
    {
        $this->library = new Library();

        $librosData = [
            ["Los heraldos negros", "César Vallejo", "978-84-376-1669-8", "Poesía", 900],
            ["Trilce", "César Vallejo", "978-950-03-0751-2", "Poesía", 400],
            ["Poemas humanos", "César Vallejo", "978-84-206-4839-2", "Poesía", 500],
            ["Yaraví a Silvia", "Mariano Melgar", "978-9972-205-47-6", "Poesía", 450],
            ["Yaravíes completos", "Mariano Melgar", "978-9972-205-42-1", "Poesía", 375],
            ["Obras poéticas completas", "Mariano Melgar", "978-9972-205-43-8", "Poesía", 785],
            ["El viaje de Yana", "Cecilia Velázquez", "978-612-456789-0", "Aventuras", 320],
            ["Lima 2099", "Daniel Alarcón", "978-612-456790-6", "Ciencia-ficción", 280],
            ["Los gallinazos sin plumas", "Julio Ramón Ribeyro", "978-612-456791-3", "Cuento", 180],
            ["La ciudad y los perros", "Mario Vargas Llosa", "978-612-456792-0", "Novela Policial", 450],
            ["Sombras en Arequipa", "Karina Pacheco", "978-612-456793-7", "Paranormal", 310],
            ["El silencio de los cóndores", "Fernando Iwasaki", "978-612-456794-4", "Distopía", 400],
            ["El jardín de las mariposas negras", "Giovanna Pacheco", "978-612-456795-1", "Fantástico", 260],
            ["Crónica de una muerte anunciada", "Gabriel García Márquez", "978-612-456796-8", "Novela Policial", 920],
            ["Historia universal de la infamia", "Jorge Luis Borges", "978-612-456797-5", "Cuento", 620],
        ];

        $this->books = [];

        foreach ($librosData as $datos) {
            $this->books[] = new Book(...$datos);
        }
    }

    public function testAddBook(): void
    {
        $this->library->addBook($this->books[0]);

        $this->assertCount(1, $this->library->findBooksByTitle("heraldos"));
    }

    public function testFindBooksByGenre(): void
    {
        foreach ($this->books as $book) {
            $this->library->addBook($book);
        }

        $novelas = $this->library->findBooksByGenre("novela");
        $this->assertCount(2, $novelas); 
        $titulos = array_column(array_map(fn($b) => ['titulo' => $b->getTitle()], $novelas), 'titulo');
        $this->assertContains("La ciudad y los perros", $titulos);
        $this->assertContains("Crónica de una muerte anunciada", $titulos);

        $cf = $this->library->findBooksByGenre("ciencia");
        $this->assertCount(1, $cf);
        $this->assertEquals("Lima 2099", $cf[0]->getTitle());

        $cuentos = $this->library->findBooksByGenre("cuento");
        $this->assertCount(2, $cuentos); 
    }

    public function testRemoveBookByIsbn(): void
    {
        $this->library->addBook($this->books[1]);

        $this->assertTrue($this->library->removeBookByIsbn("978-950-03-0751-2"));

        $this->assertCount(0, $this->library->findBooksByTitle("Trilce"));
    }

    public function testFindBooksByAuthor(): void{
        foreach ([0, 1, 2, 3] as $i) {
        $this->library->addBook($this->books[$i]);
    }
        $this->assertCount(3, $this->library->findBooksByAuthor("Vallejo"));
    }

    public function testGetLargeBooks(): void
    {
        foreach ([0, 1, 5, 13, 14] as $i) { 
            $this->library->addBook($this->books[$i]);
        }
        $grandes = $this->library->getLargeBooks();

        $this->assertCount(4, $grandes);

        $titulos = array_map(fn($b) => $b->getTitle(), $grandes);

        $this->assertContains("Los heraldos negros", $titulos);
        $this->assertContains("Obras poéticas completas", $titulos);
        $this->assertContains("Crónica de una muerte anunciada", $titulos);
        $this->assertContains("Historia universal de la infamia", $titulos);
    }

    public function testFindMelgarBooks(): void
    {
        foreach ([3, 4, 5] as $i) {
            $this->library->addBook($this->books[$i]);
        }
        $this->assertCount(3, $this->library->findBooksByAuthor("Melgar"));
    }

    public function testFindBooksByPartialTitle(): void
    {
        $this->library->addBook($this->books[3]); 
        $this->library->addBook($this->books[4]); 

        $this->assertCount(2, $this->library->findBooksByTitle("yarav"));
    }

    public function testRemoveMelgarBook(): void
    {
        $this->library->addBook($this->books[4]);

        $this->assertTrue($this->library->removeBookByIsbn("978-9972-205-42-1"));

        $this->assertCount(0, $this->library->findBooksByTitle("Yaravíes"));
    }
}