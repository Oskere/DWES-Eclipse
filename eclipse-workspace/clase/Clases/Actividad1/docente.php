<?php 

class Docente extends Persona {
    private $sueldo = 0;
    private array $estudiantes;
    public function __construct($nombre,$dni,$email,$sueldo) {
        parent::construct;
        $this->sueldo = $sueldo;
    }
    
    public function setDocente($sueldo) {
        $this->sueldo = $sueldo;
    }
    
    public function get_sueldo() {
        return $this->sueldo;
    }
}