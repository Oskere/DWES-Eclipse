<?php 
class CentroFP {
    private $cod = "";
    private $nombre = "";
    
    public function __construct($cod,$nombre) {
        $this->cod = $cod;
        $this->nombre = $nombre;
    }
    
    /**
     * @return Ambigous <string, unknown>
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     * @return Ambigous <string, unknown>
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param Ambigous <string, unknown> $cod
     */
    public function setCod($cod)
    {
        $this->cod = $cod;
    }

    /**
     * @param Ambigous <string, unknown> $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    
    

}