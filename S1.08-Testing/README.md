# Tasca S1.08. Testing – Full Stack PHP

Hola, soy **Manuel Serrano Berrocal**.

En este sprint he aprendido a escribir **tests unitarios con PHPUnit**, aplicar la metodología **TDD (Test-Driven Development)** y validar que mi código se comporta exactamente como debe, incluso en casos extremos o con datos parciales.

## Objetivo

Desarrollar una biblioteca digital que permita gestionar libros con los siguientes atributos:
- Título  
- Autor/a  
- ISBN  
- Género (Aventuras, Ciencia-ficción, Cuento, Novela Policial, Paranormal, Distopía, Fantástico)  
- Número de páginas  

Y ofrecer funcionalidades para:
- Añadir y eliminar libros  
- Buscar por **título, autor, ISBN o género** (búsqueda parcial e insensible a mayúsculas)  
- Obtener solo los **libros grandes** (>500 páginas)  

Todos los libros utilizan **autores peruanos reales**, cumpliendo con el enfoque cultural del ejercicio.

## Tecnologías utilizadas

- **PHP 8+** con tipos estrictos (`declare(strict_types=1)`)
- **PHPUnit** para testing unitario
- **Composer** para gestión de dependencias
- **TDD**: primero se escriben los tests, luego se implementa la funcionalidad

## Cómo ejecutar

1. Clona o descarga este repositorio.
2. Instala las dependencias:
   ```bash
   composer install


Luego:

manue@Manel MINGW64 /c/xampp/htdocs/fullstack-php/S1.08-Testing (main)
$ ./vendor/bin/phpunit --testdox tests
PHPUnit 9.6.32 by Sebastian Bergmann and contributors.

Library (Tests\Library)
 ✔ Add book
 ✔ Find books by genre
 ✔ Remove book by isbn
 ✔ Find books by author
 ✔ Get large books
 ✔ Find melgar books
 ✔ Find books by partial title
 ✔ Remove melgar book

Number Checker (Tests\NumberChecker)
 ✔ Es par with data set #0
 ✔ Es par with data set #1
 ✔ Es par with data set #2
 ✔ Es par with data set #3
 ✔ Es par with data set #4
 ✔ Es positivo with data set #0
 ✔ Es positivo with data set #1
 ✔ Es positivo with data set #2

Speed Sensor (Tests\SpeedSensor)
 ✔ Obtener nivel velocidad with data set #0
 ✔ Obtener nivel velocidad with data set #1
 ✔ Obtener nivel velocidad with data set #2
 ✔ Obtener nivel velocidad with data set #3
 ✔ Obtener nivel velocidad with data set #4
 ✔ Obtener nivel velocidad with data set #5
 ✔ Obtener nivel velocidad with data set #6
 ✔ Obtener nivel velocidad with data set #7
 ✔ Obtener nivel velocidad with data set #8
 ✔ Obtener nivel velocidad with data set #9
 ✔ Obtener nivel velocidad with data set #10
 ✔ Velocidad negativa lanza excepcion

OK (28 tests, 39 assertions)

manue@Manel MINGW64 /c/xampp/htdocs/fullstack-php/S1.08-Testing (main)
$





Luego:

manue@Manel MINGW64 /c/xampp/htdocs/fullstack-php/S1.08-Testing (main)
$ ./vendor/bin/phpunit --testdox tests/LibraryTest.php
PHPUnit 9.6.32 by Sebastian Bergmann and contributors.

Library (Tests\Library)
 ✔ Add book
 ✔ Find books by genre
 ✔ Remove book by isbn
 ✔ Find books by author
 ✔ Get large books
 ✔ Find melgar books
 ✔ Find books by partial title
 ✔ Remove melgar book

Time: 00:00.018, Memory: 4.00 MB

OK (8 tests, 19 assertions)

manue@Manel MINGW64 /c/xampp/htdocs/fullstack-php/S1.08-Testing (main)
$
