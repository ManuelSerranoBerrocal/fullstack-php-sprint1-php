<?php
require_once 'Notifier.php';

/**
 * Clase SmsNotifier: envía notificaciones por SMS.
 */
class SmsNotifier implements Notifier {
    private string $phone;

    public function __construct(string $phone) {
        if (!preg_match('/^\+?[0-9\s\-\(\)]{7,}$/', $phone)) {
            throw new InvalidArgumentException("Teléfono inválido: $phone");
        }
        $this->phone = $phone;
    }

    public function send(string $message): void {
        echo "[SMS] 📞 Enviando a {$this->phone}: $message<br><br>";
    }
}
?>