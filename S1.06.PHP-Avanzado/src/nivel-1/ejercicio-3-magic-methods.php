<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel 1 - Ejercicio 3: Método mágico __toString()</title>
    <link rel="stylesheet" href="../../public/styles.css">
</head>
<body>
    <div class="container">
        <p><a href="../../public/index.html">🔙 Volver al menú</a></p>
        <?php
        /*
        Nivel 1 - Ejercicio 3
        Sobrescribe alguna de las lógicas de entre todos los métodos mágicos que existen (que no sea __construct).
        */

        class Thought {
            private string $text;
            private string $author;

            public function __construct(string $text, string $author = 'Anónimo') {
                $this->text = $text;
                $this->author = $author;
            }

            public function __toString(): string {
                return "\"{$this->text}\" — {$this->author}";
            }

            public function getText(): string {
                return $this->text;
            }
        }

        $thought = new Thought(
            "Bien sea que lo hagas o no lo hagas, igual el tiempo pasará, así que mejor hazlo.",
            "Manuel Enrique Serrano Berrocal"
        );

        echo "<h2>Nivel 1 - Ejercicio 3: Método mágico __toString()</h2>";
        echo "<p>Mi pensamiento: " . $thought . "</p>";
        echo "<p>Hoy reflexiono: " . $thought . "</p>";
        ?>
    </div>
</body>
</html>