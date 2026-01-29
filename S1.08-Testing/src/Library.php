<?php
declare(strict_types=1);

namespace App;

class Library
{
    private array $books = [];

    public function addBook(Book $book): void
    {
        $this->books[] = $book;
    }

    public function removeBookByIsbn(string $isbn): bool
    {
        foreach ($this->books as $index => $book) {
            if ($book->getIsbn() === $isbn) {
                unset($this->books[$index]);

                $this->books = array_values($this->books);

                return true;
            }
        }
        return false;
    }

    public function findBooksByTitle(string $title): array
    {
        return array_values(array_filter($this->books, fn($book) =>
            stripos($book->getTitle(), $title) !== false
        ));
    }

    public function findBooksByAuthor(string $author): array
    {
        return array_values(array_filter($this->books, fn($book) =>
            stripos($book->getAuthor(), $author) !== false
        ));
    }

    public function findBooksByGenre(string $genre): array
    {
        return array_values(array_filter($this->books, fn($book) =>
            stripos($book->getGenre(), $genre) !== false
        ));
    }

    public function getLargeBooks(): array
    {
        return array_values(array_filter($this->books, fn($book) =>
            $book->getPages() > 500
        ));
    }
}