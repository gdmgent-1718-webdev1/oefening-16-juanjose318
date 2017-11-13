<?php


class Gedicht extends kunstAbstract implements IntAantalWoorden
{

   
    public $aantalWoorden;

    public function getAantalWoorden() {
        
        
    
        return $this->aantalWoorden;
    
    }
    
    public function setAantalWoorden($aantalWoorden): void {
            
            
        
        $this->aantalWoorden = $aantalWoorden;
        
    }


}