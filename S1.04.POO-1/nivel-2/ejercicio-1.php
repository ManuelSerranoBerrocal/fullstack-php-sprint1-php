<?php
/*
Nivel 2
Ejercicio 1

Crea la clase PokerDice. Las caras de un dado de póker tienen las siguientes figuras: As, K, Q, J, 7 y 8.
Debe tener un método que no haga otra cosa que lanzar el dado.
Crea también otro método que diga cuál es la figura que ha salido en la última tirada del dado en cuestión.

Después, amplía el programa para poder lanzar cinco dados de póker a la vez.
Además, queremos que la clase PokerDice tenga un método que nos permita ver la cantidad de tiradas de TODOS los dados.
*/
// Definimos la clase DadoPoker (la fábrica de dados)
class DadoPoker {

    private $caras = ['As', 'K', 'Q', 'J', '7', '8'];

    private $ultimaTirada;

    private static $totalTiradas = 0;

    public function lanzar() {

        $this->ultimaTirada = $this->caras[array_rand($this->caras)];

        self::$totalTiradas++;

        return $this->ultimaTirada;
    }

    public function verUltimaTirada() {

        return $this->ultimaTirada ?? "No se ha tirado aún";
    }

    public static function verTotalTiradas() {

        return self::$totalTiradas;
    }
}

echo "<h3>Nivel 2 - Ejercicio 1: DadoPoker</h3>";

$dados = [];

for ($i = 0; $i < 5; $i++) {
    $dados[] = new DadoPoker();
}

foreach ($dados as $indice => $dado) {

    $resultado = $dado->lanzar();

    echo "Dado " . ($indice + 1) . ": $resultado<br>";
}

echo "<br>Total de tiradas (todos los dados): " . DadoPoker::verTotalTiradas() . "<br>";
?>