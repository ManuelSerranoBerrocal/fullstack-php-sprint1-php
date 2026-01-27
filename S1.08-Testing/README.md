Hola, soy Manuel Serrano Berrocal, y este es mi repositorio para la Tasca S1.08. Testing del Sprint 1 de Full Stack PHP.

En este sprint he aprendido a escribir tests unitarios con PHPUnit, aplicar TDD (Test-Driven Development) y validar que mi código hace exactamente lo que debe, incluso en casos extremos.

manue@Manel MINGW64 /c/xampp/htdocs/fullstack-php/S1.08-Testing (main)
$ composer install


Luego:

manue@Manel MINGW64 /c/xampp/htdocs/fullstack-php/S1.08-Testing (main)
$ ./vendor/bin/phpunit --testdox tests
PHPUnit 9.6.32 by Sebastian Bergmann and contributors.

Library (Tests\Library)
 ✔ Add book
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

Time: 00:00.022, Memory: 4.00 MB

OK (27 tests, 31 assertions)

manue@Manel MINGW64 /c/xampp/htdocs/fullstack-php/S1.08-Testing (main)
$
