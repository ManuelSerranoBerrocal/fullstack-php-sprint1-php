<?php
require_once 'Notifier.php';

//Clase PostalNotifier: envía notificaciones por correo postal (carta física).
class PostalNotifier implements Notifier {
    private string $address;

    public function __construct(string $address) {
        if (empty(trim($address))) {
            throw new InvalidArgumentException("La dirección postal no puede estar vacía.");
        }
        $this->address = $address;
    }

    public function send(string $message): void {
        echo "[CORREO]  Enviando carta a '{$this->address}': $message<br><br>";
    }
}
?>