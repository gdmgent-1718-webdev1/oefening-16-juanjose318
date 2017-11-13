<?php

namespace Kunstwerken;


class Vaas extends kunstwerkAbstract implements intAfbeelding, intGewicht, intBladzijden
{
    
    public $afbeelding;
    public $gewicht;
    public $aantalBladzijden;
    
    public function getAfbeelding(): ?string {
    
  

    return $this->afbeelding;

    }
    public function setAfbeelding(string $afbeelding): void {
        
       
    
        $this->afbeelding = $afbeelding;
    
    }

    public function getGewicht() {
        
        
    
        return $this->gewicht;
    
    }
    
    public function setGewicht($afbeelding): void {
            
            
        
        $this->gewicht = $gewicht;
        
    }

    public function getAantalBladzijden() {
        
        
    
        return $this->aantalBladzijden;
    
    }
    
    public function setAantalBladzijden($aantalBladzijden): void {
            
            
        
        $this->aantalBladzijden = $aantalBladzijden;
        
    }

    

    
}