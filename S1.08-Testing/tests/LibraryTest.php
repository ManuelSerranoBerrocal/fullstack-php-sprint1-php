<?php
/*
Nivel 3 - Ejercicio 1
Necesitamos crear un pequeño software para el tratamiento de información en una biblioteca. 
Por eso necesitamos representar la información de un libro, que tiene:

- Un título
- Un autor/autora
- Un ISBN
- Un género, que puede ser: Aventuras, Ciencia-ficción, Cuento, Novela Policial, Paranormal, Distopía, Fantástico.
- Nº. de páginas.

Necesitamos almacenar el conjunto de libros y tener métodos que:

- Añadan, borren y modifiquen un libro de la librería.
- Permitan consultar libros por título, género, ISBN o autor.
- Devolver libros grandes (más de 500 páginas).

Desarrolla mediante TDD este programa para garantizar que cumple con todas las funcionalidades 
solicitadas por el enunciado.
*/

declare(strict_types=1);
namespace Tests;

use App\Book;
use App\Library;
use PHPUnit\Framework\TestCase;
 
class LibraryTest extends TestCase {
    private Library $library;
    private Book $book1;
    private Book $book2;
    private Book $book3;
    private Book $book4;
    private Book $book5;
    private Book $book6;

    protected function setUp(): void {
        $this->library = new Library();
        $this->book1 = new Book("Los heraldos negros", "César Vallejo", "978-84-376-1669-8", "Poesía", 900);
        $this->book2 = new Book("Trilce", "César Vallejo", "978-950-03-0751-2", "Poesía", 400);
        $this->book3 = new Book("Poemas humanos", "César Vallejo", "978-84-206-4839-2", "Poesía", 500);
        $this->book4 = new Book("Yaraví a Silvia", "Mariano Melgar", "978-9972-205-47-6", "Poesía", 450);
        $this->book5 = new Book("Yaravíes completos", "Mariano Melgar", "978-9972-205-42-1", "Poesía", 375);
        $this->book6 = new Book("Obras poéticas completas", "Mariano Melgar", "978-9972-205-43-8", "Poesía", 785);
    }

    public function testAddBook(): void {
        $this->library->addBook($this->book1);
        $books = $this->library->findBooksByTitle("heraldos");
        $this->assertCount(1, $books);
    }

    public function testRemoveBookByIsbn(): void {
        $this->library->addBook($this->book2);
        $result = $this->library->removeBookByIsbn("978-950-03-0751-2");
        $this->assertTrue($result);
        $books = $this->library->findBooksByTitle("Trilce");
        $this->assertCount(0, $books);
    }

    public function testFindBooksByAuthor(): void {
        $this->library->addBook($this->book1);
        $this->library->addBook($this->book2);
        $this->library->addBook($this->book3);
        $this->library->addBook($this->book4);
        $books = $this->library->findBooksByAuthor("Vallejo");
        $this->assertCount(3, $books);
    }

    public function testGetLargeBooks(): void {
        $this->library->addBook($this->book1); 
        $this->library->addBook($this->book2);
        $this->library->addBook($this->book6); 
        $largeBooks = $this->library->getLargeBooks();
        $this->assertCount(2, $largeBooks); 
        $titles = array_map(fn($book) => $book->getTitle(), $largeBooks);
        $this->assertContains("Los heraldos negros", $titles);
        $this->assertContains("Obras poéticas completas", $titles);
    }

    public function testFindMelgarBooks(): void {
        $this->library->addBook($this->book4);
        $this->library->addBook($this->book5);
        $this->library->addBook($this->book6);
        $books = $this->library->findBooksByAuthor("Melgar");
        $this->assertCount(3, $books);
    }

    public function testFindBooksByPartialTitle(): void {
        $this->library->addBook($this->book4); 
        $this->library->addBook($this->book5); 
        $books = $this->library->findBooksByTitle("yarav");
        $this->assertCount(2, $books);
    }

    public function testRemoveMelgarBook(): void {
        $this->library->addBook($this->book5);
        $result = $this->library->removeBookByIsbn("978-9972-205-42-1");
        $this->assertTrue($result);
        $books = $this->library->findBooksByTitle("Yaravíes");
        $this->assertCount(0, $books);
    }
}