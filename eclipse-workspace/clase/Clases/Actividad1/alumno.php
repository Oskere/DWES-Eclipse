<?php
class Alumno extends Persona {
    private $CodMatricula = "";
    private $ciclo = "";
    
    public function __construct($nombre,$dni,$email,$codMatricula,$ciclo) {
        parent::construct;
        $this->codMatricula = $codMatricula;
        $this->ciclo = $ciclo;
    }
    
    public function get_Cod() {
        return $this->CodMatricula;
    }
    
    public function get_ciclo() {
        return $this->ciclo;
    }
    
}