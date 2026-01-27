<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 3 - Ejercicio 1: Catálogo de Cines</title>
    <link rel="stylesheet" href="../public/styles.css">
</head> 
<body>
    <div class="container">
        <p><a href="../public/index.html" style="color: #3182ce; font-weight: 600; text-decoration: none;">🔙 Volver al menú principal</a></p>
        <?php
        /*
        Nivel 3 - Ejercicio 1
        Imagina que tienes que presentar el catálogo de películas de una cadena de cines. 
        Cada cine tiene un nombre, una población a la que pertenece, y un listado de películas. 
        Cada película tiene un nombre, una duración, y un director/a.

        Se trata de hacer un programa que nos permita registrar esta información para después:
        Para cada cine, mostrar los datos de cada película.
        Para cada cine, mostrar la película con mayor duración.
        Implementa una función/método que busque por el nombre del director/a películas en diferentes cines. 
        No es necesario repetir películas.

        Además, puedes aprovechar este ejercicio para trabajar una buena presentación con HTML+CSS que dé soporte a la lógica.
        */
        require_once 'Movie.php';    
        require_once 'Cinema.php';  

         /**
         * Busca películas por director/a en varios cines, sin duplicados por título.
         */
        function findMoviesByDirector(array $cinemas, string $directorName): array {
            $results = [];
            $seenTitles = [];

            foreach ($cinemas as $cinema) {
                foreach ($cinema->getMovies() as $movie) {
                    if (
                        strcasecmp($movie->director, $directorName) === 0 &&
                        !in_array($movie->title, $seenTitles, true)
                    ) {
                        $results[] = $movie;
                        $seenTitles[] = $movie->title;
                    }
                    
                }
            }
            return $results;
        }

        $cinemas = [
            new Cinema("Cines Fabra i Puig", "Barcelona"),
            new Cinema("Cines Imperio Inca", "Cuzco"),
            new Cinema("Cines Ritz", "Lima"),
            new Cinema("Cine New York", "New York")
        ];

        $cinemas[0]->addMovie(new Movie("Historia de Barcelona", 132, "Manel Serrat"));
        $cinemas[0]->addMovie(new Movie("La Sagrada Familia", 95, "Juana de Arco"));
        $cinemas[1]->addMovie(new Movie("Machu Picchu Maravilla del mundo", 180, "Mercedes Montufar"));
        $cinemas[1]->addMovie(new Movie("Cuzco y sus misterios", 110, "Manel Serrat"));
        $cinemas[2]->addMovie(new Movie("Lima ciudad de Virreyes", 105, "Ricardo Palma"));
        $cinemas[2]->addMovie(new Movie("Gastronomía Peruana", 90, "Gastón Acurio"));
        $cinemas[3]->addMovie(new Movie("New York, New York", 150, "Marilin Monroe"));
        $cinemas[3]->addMovie(new Movie("La Gran Manzana", 140, "Charles Chaplin"));
        

        echo "<h2>Catálogo de Cines</h2>";

        foreach ($cinemas as $cinema) {
            echo "<h2>{$cinema->name} ({$cinema->city})</h2>";
            foreach ($cinema->getMovies() as $movie) {
                echo "- {$movie->title} ({$movie->duration} min) - Director/a: {$movie->director}<br>";
            }

            $longest = $cinema->getLongestMovie();
            if ($longest) {
                echo "<strong>📽️ Película más larga: {$longest->title} ({$longest->duration} min)</strong><br>";
            }

        }

        $directorToSearch = "Manel Serrat";
        $foundMovies = findMoviesByDirector($cinemas, $directorToSearch);

        echo "<h4>Películas dirigidas por $directorToSearch</h4>";
        if (empty($foundMovies)) {
            echo "No se encontraron películas dirigidas por $directorToSearch.<br>";
        } else {
            foreach ($foundMovies as $movie) {
                echo "- {$movie->title} ({$movie->duration} min)<br>";
            }
        }
        ?>
    </div>
</body>
</html>