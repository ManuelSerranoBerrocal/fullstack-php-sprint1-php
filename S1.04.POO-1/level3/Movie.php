<?php
/**
 * Clase Movie: representa una película con título, duración y director/a.
 */

class Movie {
    public string $title;
    public int $duration;
    public string $director;

    public function __construct(string $title, int $duration, string $director) {
        if (empty(trim($title))) {
            throw new InvalidArgumentException("El título no puede estar vacío.");
        }
        if ($duration <= 0) {
            throw new InvalidArgumentException("La duración debe ser mayor que cero.");
        }
        if (empty(trim($director))) {
            throw new InvalidArgumentException("El director no puede estar vacío.");
        }

        $this->title = $title;
        $this->duration = $duration;
        $this->director = $director;
    }
}
?>