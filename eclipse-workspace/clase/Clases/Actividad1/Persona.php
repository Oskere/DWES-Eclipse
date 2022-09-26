<?php
class Persona {
    private $name = "";
    private $dni = "";
    private $emaiol = "";
    
}

class Alumno {
    private $CodMatricula = "";
    private $ciclo = "";
    
    public function setAlumno($CodMatricula, $ciclo) {
        $this->CodMatricula= $CodMatricula;
        $this->ciclo = $ciclo;
    }
    
    public function get_Cod() {
        return $this->CodMatricula;
    }
    
    public function get_ciclo() {
        return $this->ciclo;
    }
    
}

class Docente {
    private $sueldo = 0;
    
    public function setDocente($sueldo) {
        $this->sueldo = $sueldo;
    }
    
    public function get_sueldo() {
        return $this->sueldo;
    }
}

class CentroFP {
    private $cod = "";
    private $nombre = "";
    
    public function setCod($cod) {
        $this->cod = $cod;
        
    }
    
}