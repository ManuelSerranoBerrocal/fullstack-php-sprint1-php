<?php
/**
 * Clase Cinema: representa un cine con nombre, ciudad y lista de películas.
 */
class Cinema {
    public string $name;
    public string $city;
    private array $movies = [];

    public function __construct(string $name, string $city) {
        $this-> name = $name;
        $this-> city = $city;
    }

    public function addMovie(Movie $movie): void {
        $this->movies[] = $movie;
    }

    public function getMovies(): array {
        return $this->movies;
    }

    public function getLongestMovie(): ?Movie {
        if (empty($this->movies)) return null;

        $longest = $this->movies[0];
        foreach ($this->movies as $movie) {
            if ($movie->duration > $longest->duration) {
                $longest = $movie;
            }
        }
        return $longest;
    } 

 
}


?> 