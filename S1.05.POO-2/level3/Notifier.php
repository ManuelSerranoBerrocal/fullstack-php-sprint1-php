<?php
//Obliga a implementar un método send() que reciba un mensaje.
 
interface Notifier {
    public function send(string $message): void;
}
?>