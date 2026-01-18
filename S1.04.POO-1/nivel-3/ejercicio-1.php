<?php
/*
Nivel 3 - Ejercicio 1

Imagina que tienes que presentar el catálogo de películas de una cadena de cines. 
Cada cine tiene un nombre, una población a la que pertenece y un listado de películas. 
Cada película tiene un nombre, una duración y un/a director/a.
Se trata de hacer un programa que nos permita registrar esta información para después:
Para cada cine, mostrar los datos de cada película.
Para cada cine, mostrar la película con mayor duración.
Implementar una función/método que busque películas por el nombre del/de la director/a en diferentes cines. 
No es necesario repetir películas.
Además, puedes aprovechar este ejercicio para trabajar una buena presentación con HTML + CSS que apoye la lógica.
*/
class Pelicula {
    public function __construct(
        public string $titulo,
        public int $duracion,
        public string $director
    ) {
        if (empty(trim($titulo))) {
            throw new InvalidArgumentException("El título no puede estar vacío.");
        }

        if ($duracion <= 0) {
            throw new InvalidArgumentException("La duración debe ser mayor que cero.");
        }

        if (empty(trim($director))) {
            throw new InvalidArgumentException("El director no puede estar vacío.");
        }
    }
}

class Cine {
    private array $peliculas = [];

    public function __construct(
        public string $nombre,
        public string $ciudad
    ) {}

    public function agregarPelicula(Pelicula $pelicula): void {
        $this->peliculas[] = $pelicula;
    }

    public function obtenerPeliculas(): array {
        return $this->peliculas;
    }

    public function obtenerPeliculaMasLarga(): ?Pelicula {
        if (empty($this->peliculas)) return null;

        $masLarga = $this->peliculas[0];
        foreach ($this->peliculas as $pelicula) {
            if ($pelicula->duracion > $masLarga->duracion) {
                $masLarga = $pelicula;
            }
        }
        return $masLarga;
    }
}

function buscarPeliculasPorDirector(array $cines, string $nombreDirector): array {
    $resultados = [];
    $titulosVistos = [];

    foreach ($cines as $cine) {
        foreach ($cine->obtenerPeliculas() as $pelicula) {
            if (
                strcasecmp($pelicula->director, $nombreDirector) === 0 &&
                !in_array($pelicula->titulo, $titulosVistos, true)
            ) {
                $resultados[] = $pelicula;
                $titulosVistos[] = $pelicula->titulo;
            }
        }
    }
    return $resultados;
}

$cines = [
    new Cine("Cines ABC", "Barcelona"),
    new Cine("Cines Lumière", "Madrid")
];

$cines[0]->agregarPelicula(new Pelicula("Parásitos", 132, "Bong Joon-ho"));
$cines[0]->agregarPelicula(new Pelicula("El Padrino", 175, "Francis Ford Coppola"));

$cines[1]->agregarPelicula(new Pelicula("Origen", 148, "Christopher Nolan"));
$cines[1]->agregarPelicula(new Pelicula("Interestelar", 169, "Christopher Nolan"));
$cines[1]->agregarPelicula(new Pelicula("El Padrino", 175, "Francis Ford Coppola")); // duplicado intencional

echo "<h2>Catálogo de Cines</h2>";

foreach ($cines as $cine) {
    echo "<h4>{$cine->nombre} ({$cine->ciudad})</h4>";

    foreach ($cine->obtenerPeliculas() as $pelicula) {
        echo "- {$pelicula->titulo} ({$pelicula->duracion} min) - Director: {$pelicula->director}<br>";
    }

    $masLarga = $cine->obtenerPeliculaMasLarga();
    if ($masLarga) {
        echo "<strong>🎬 Película más larga: {$masLarga->titulo} ({$masLarga->duracion} min)</strong><br><br>";
    }
}

$directorABuscar = "Christopher Nolan";
$peliculasEncontradas = buscarPeliculasPorDirector($cines, $directorABuscar);

echo "<h4>Películas dirigidas por $directorABuscar:</h4>";

if (empty($peliculasEncontradas)) {
    echo "No se encontraron películas.<br>";
} else {
    foreach ($peliculasEncontradas as $pelicula) {
        echo "- {$pelicula->titulo} ({$pelicula->duracion} min)<br>";
    }
}
?>