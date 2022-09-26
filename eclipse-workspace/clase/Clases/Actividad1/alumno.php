<?php
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