<?php
require_once 'Notifier.php';

/**
 * Clase EmailNotifier: envía notificaciones por correo electrónico.
 */
class EmailNotifier implements Notifier {
    private string $email;

    public function __construct(string $email) {
        // Valida que el email tenga formato correcto
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException("Email inválido: $email");
        }
        $this->email = $email;
    }

    public function send(string $message): void {
        // Simula el envío de un email (en producción, usarías PHPMailer o similar)
        echo "[EMAIL]  Enviando a {$this->email}: $message<br><br>";
    }
}
?>