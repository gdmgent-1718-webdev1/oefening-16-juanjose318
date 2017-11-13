<?php

namespace Kunstwerken;


class Beeldhouwerk extends kunstwerkAbstract implements intAfbeelding, intGewicht
{
    
    public $afbeelding;
    public $gewicht;
    
    public function getAfbeelding(): ?string {
    
    

    return $this->afbeelding;

    }

    public function setAfbeelding(string $afbeelding): void {
        
       
    
        $this->afbeelding = $afbeelding;
    
    }

    public function getGewicht() {
    
 

    return $this->gewicht;

    }

    public function setGewicht($gewicht): void {
        
        
    
        $this->gewicht = $gewicht;
    
        }

    
}