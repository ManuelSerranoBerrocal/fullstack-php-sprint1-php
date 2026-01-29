<?php
declare(strict_types=1);

namespace App;

class Book
{
    public function __construct(
        private string $title,    
        private string $author,  
        private string $isbn,   
        private string $genre,   
        private int $pages      
    ) {}

    public function getTitle(): string { return $this->title; }

    public function getAuthor(): string { return $this->author; }

    public function getIsbn(): string { return $this->isbn; }

    public function getGenre(): string { return $this->genre; }

    public function getPages(): int { return $this->pages; }
}