<?php
/*
Nivel 3 - Ejercicio 1
Imagina que estamos implementando un mecanismo de notificaciones.
Las notificaciones envían un mensaje.
Podemos notificar mediante Email, SMS o Correo ordinario.
Crea una estructura de clases que nos permita implementar todo esto.
*/

interface Notificador {
    public function enviar(string $mensaje): void;
}

class EmailNotificador implements Notificador {
    private string $destinatario;

    public function __construct(string $email) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("Email inválido: $email");
        }
        $this->destinatario = $email;
    }

    public function enviar(string $mensaje): void {
        echo "[EMAIL] 📬 Enviando a {$this->destinatario}: $mensaje<br><br>";
        
    }
}

class SmsNotificador implements Notificador {
    private string $telefono;

    public function __construct(string $telefono) {
        if (!preg_match('/^\+?[0-9\s\-\(\)]{7,}$/', $telefono)) {
            throw new InvalidArgumentException("Teléfono inválido: $telefono");
        }
        $this->telefono = $telefono;
    }

    public function enviar(string $mensaje): void {
        echo "[SMS] 📞 Enviando a {$this->telefono}: $mensaje<br><br>";
        
    }
}

class CorreoOrdinarioNotificador implements Notificador {
    private string $direccion;

    public function __construct(string $direccion) {
        if (empty(trim($direccion))) {
            throw new InvalidArgumentException("Dirección postal no puede estar vacía.");
        }
        $this->direccion = $direccion;
    }

    public function enviar(string $mensaje): void {
        echo "[CORREO] 📮 Enviando carta a '{$this->direccion}': $mensaje<br><br>";
        
    }
}

echo "<h2>Nivel 3 - Ejercicio 1: Sistema de Notificaciones</h2>";

$notificadores = [
    new EmailNotificador("manuelssoftware@gmail.com"),
    new SmsNotificador("+34613978291"),
    new CorreoOrdinarioNotificador("Carrer de Balmes, 123, 2º 1ª, 08022 Barcelona")
];

$mensaje = "Su inscripción al concurso Canguro ha sido confirmada. ¡Éxito en su participación!";

foreach ($notificadores as $notificador) {
    $notificador->enviar($mensaje);
}

echo "<br><strong>Pruebas de validación:</strong><br>";

function probarNotificador(callable $accion) {
    try {
        $accion();
    } catch (InvalidArgumentException $e) {
        echo "❌ Error: " . $e->getMessage() . "<br><br>";
    }
}

probarNotificador(fn() => new EmailNotificador("email-mal-formado"));
probarNotificador(fn() => new SmsNotificador("abc"));
probarNotificador(fn() => new CorreoOrdinarioNotificador(""));
?>