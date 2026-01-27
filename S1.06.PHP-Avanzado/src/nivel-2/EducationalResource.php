<?php
require_once 'Topic.php';
require_once 'ResourceType.php';

class EducationalResource {
    public function __construct(
        public string $name,
        public Topic $topic,
        public string $url,
        public ResourceType $type
    ) {
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
            throw new InvalidArgumentException("URL inválida: $url");
        }
    }

    public function display(): void {
        echo "<p><strong>{$this->name}</strong><br>";
        echo "Tema: {$this->topic->value}<br>";
        echo "Tipo: {$this->type->value}<br>";
        echo "URL: <a href=\"{$this->url}\" target=\"_blank\">{$this->url}</a></p>";
    }
}
?>