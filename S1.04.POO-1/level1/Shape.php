<?php
/*
Clase base Shape (Forma) con ancho y alto.
Sirve como clase padre para giguras geométricas.
*/

class Shape {
    protected float $width;
    protected float $height;

    public function __construct(float $width, float $height) {
    $this->width = $width;
    $this->height = $height;
}
}

?>
