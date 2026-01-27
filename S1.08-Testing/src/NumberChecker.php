<?php
declare(strict_types=1);

namespace App;

class NumberChecker {
    public function esPar(int $numero): bool {
        return $numero % 2 === 0;
    }

    public function esPositivo(int $numero): bool {
        return $numero > 0;
    }
}