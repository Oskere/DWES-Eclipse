<?php

class ordenador {
    private $SO="";
    private $codHZ="";
    Private $esSobremesa=false;
    /* @return string*/
     public function getSO()
     {
     return $this->SO;
     }
     
     /* @return mixed*/
     public function getCodHZ()
     {
     return $this->codHZ;
     }
     
     /* @param string $SO*/
     public function setSO($SO)
     {
     $this->SO = $SO;
     }
     /* @param mixed $CodHZ*/
    public function setCodHZ($codHZ)
    {
        $this->codHZ = $codHZ;
    }
    
    public function setEsSobremesa($esSobremesa)
    {
        $this->esSobremesa = $esSobremesa;
    }
    public function getEsSobremesa()
    {
        return $this->esSobremesa;
    }
    
    public function __construct($SO,$codHZ,$esSobremesa) {
        $this->SO = $SO;
        $this->codHZ = $codHZ;
        $this->esSobremesa = $esSobremesa;
    }
    
    public function toString(){
        echo "<h1>".$this->SO."</h1>"
            ."<h2>".$this->codHZ."</h2>"
                .($this->esSobremesa ?"<h3>Sobremesa</h3>" :"<h3>Portátil</h3>");;
    }
    
    public static function guardarSerializado($nombreFichero, $ordenadorArray){
        // guardar coches en archivo
        $s = serialize($ordenadorArray);
        // almacenamos $s en algún lugar en el que page2.php puede encontrarlo.
        file_put_contents($nombreFichero, $s);
    }
    
    public static function getOrdenadoresUnselizados($nombreFichero){
        
        $s = file_get_contents($nombreFichero);
        $ordenadorArray = unserialize($s);
        return $ordenadorArray;
    }
    
    public static function borrarOrdenador($Hz) {
        unset($_GET($ordenadorArray [$codHZ]));
        ordenador::guardarSerializado('storeordenador', $ordenadorArray);
    }
}
?>