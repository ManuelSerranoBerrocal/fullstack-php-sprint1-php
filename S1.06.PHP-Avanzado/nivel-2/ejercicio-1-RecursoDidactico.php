<?php
/*
Nivel 2 - Ejercicio 1
Crea una clase que represente un recurso didáctico de esta especialidad. 
Los recursos deberán tener un nombre, un tema (que solo podrá ser PHP, CSS, HTML, SQL, Laravel), 
una URL y un tipo de recurso (Archivo, Artículo web, Vídeo). 
Implementa tanto el tema como el tipo de recurso mediante enums.
*/ 

enum Tema: string {
    case PHP = 'PHP';
    case CSS = 'CSS';
    case HTML = 'HTML';
    case SQL = 'SQL';
    case LARAVEL = 'Laravel';
}

enum TipoRecurso: string {
    case ARCHIVO = 'Archivo';
    case ARTICULO_WEB = 'Artículo web';
    case VIDEO = 'Vídeo';
}

class RecursoDidactico {
    public function __construct(
        public string $nombre,
        public Tema $tema,
        public string $url,
        public TipoRecurso $tipo
    ) {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException("URL inválida: $url");
        }
    }

    public function mostrar(): void {
        echo "<p><strong>{$this->nombre}</strong><br>";
        echo "Tema: {$this->tema->value}<br>";
        echo "Tipo: {$this->tipo->value}<br>";
        echo "URL: <a href=\"{$this->url}\" target=\"_blank\">{$this->url}</a></p>";
    }
}

echo "<h3>Nivel 2 - Ejercicio 1: Recurso Didáctico con Enums</h3>";

try {
    $recurso1 = new RecursoDidactico(
        "Guía de PHP Moderno",
        Tema::PHP,
        "https://php.net",
        TipoRecurso::ARTICULO_WEB
    );

    $recurso2 = new RecursoDidactico(
        "Curso de Laravel",
        Tema::LARAVEL,
        "https://laravel.com",
        TipoRecurso::VIDEO
    );

    $recurso1->mostrar();
    $recurso2->mostrar();

} catch (InvalidArgumentException $e) {
    echo "Error: " . $e->getMessage();
}
?>