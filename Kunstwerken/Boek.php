<?php


class Boek extends kunstwerkAbstract implements IntBladzijden, IntAantalWoorden
{

    public $aantalBladzijden;
    public $aantalWoorden;

    public function getAantalBladzijden() {
        
        
    
        return $this->aantalBladzijden;
    
    }
    
    public function setAantalBladzijden($aantalBladzijden): void {
            
            
        
        $this->aantalBladzijden = $aantalBladzijden;
        
    }

        
    public function getAantalWoorden() {
        
        
    
        return $this->aantalWoorden;
    
    }
    
    public function setAantalWoorden($aantalWoorden): void {
            
            
        
        $this->aantalWoorden = $aantalWoorden;
        
    }


}