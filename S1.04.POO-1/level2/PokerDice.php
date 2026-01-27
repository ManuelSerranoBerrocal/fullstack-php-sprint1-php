<?php
/*
Nivel 2 - Ejercicio 1
Crea la clase PokerDice. Las caras de un dado de póker tienen las siguientes figuras: As, K, Q, J, 7 y 8.
Debe tener un método que no haga otra cosa que tirar el dado.
Crea también otro método que diga cuál es la figura que ha salido en la última tirada del dado en cuestión.
Después, amplía el programa para poder tirar cinco dados de póker a la vez.
Además, queremos que la clase PokerDice tenga un método que nos permita ver la cantidad de tiradas de TODOS los dados.
*/

// Definimos la clase DadoPoker (la fábrica de dados)
class PokerDice {
    private array $faces = ['As', 'K', 'Q', 'J', '7', '8'];
    private ?string $lastRoll = null;
    private static int $totalRolls = 0;

    /* tirar el dado */
    public function roll(): string {
        $this->lastRoll = $this->faces[array_rand($this->faces)];
        self::$totalRolls++;
        return $this->lastRoll;
    }

    /* ver la última tirada */
    public function getLastRoll(): string {
        return $this->lastRoll ?? "No se ha tirado aún";
    }

        public static function getTotalRolls(): int {
        return self::$totalRolls;
    }


}
?>
