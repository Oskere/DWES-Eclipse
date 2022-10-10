<?php 
class Variado extends Espacio{
    private $tipo="";
    
    public function setTipo($nombre) {
        $this->tipo = $tipo;
    }
    
    public function getTipo() {
        return $this->tipo;
    }

    public function __construct($puntuWifi,$puntosRed,$tipo) {
        parent::construct;
        $this->tipo = $tipo;
    }
    
}