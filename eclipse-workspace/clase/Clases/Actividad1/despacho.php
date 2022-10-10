<?php
class despacho extends espacios{
    private $nombre;
    private array $ordenadores;
    private array $docentes;
    public function __construct($puntuWifi,$puntosRed,$nombre) {
        parent::construct;
        $this->nombre = $nombre;
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }
}

?>