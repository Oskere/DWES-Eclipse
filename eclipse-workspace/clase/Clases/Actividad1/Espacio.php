<?php
abstract class Espacio{
    private $puntoWifi=false;
    private $puntosRed=0;
    

    
    public function __construct($puntoWifi, $puntosRed){
        $puntoWifi->puntoWifi= $puntoWifi;
        $puntosRed->puntosRed= $puntosRed;
    }
    
    /**
     * @return number
     */
    public function getPuntosRed()
    {
        return $this->puntosRed;
    }
    
    /**
     * @param boolean $puntoWifi
     */
    public function setpuntoWifi($puntoWifi)
    {
        $this->puntoWifi = $puntoWifi;
    }
    
    /**
     * @param number $puntosRed
     */
    public function setPuntosRed($puntosRed)
    {
        $this->puntosRed = $puntosRed;
    }
    
    public function getpuntoWifi()
    {
        return $this->puntoWifi;
    }
    
}