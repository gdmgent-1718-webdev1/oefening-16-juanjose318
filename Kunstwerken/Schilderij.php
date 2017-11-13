<?php

namespace Kunstwerken;


class Schilderij extends kunstwerkAbstract implements intAfbeelding
{
    
    public $afbeelding;
    
    public function getAfbeelding(): ?string {
    
    // hoeft geen $ te zetten bij uri 

    return $this->afbeelding;

    }
    public function setAfbeelding(string $afbeelding): void {
        
        // hoeft geen $ te zetten bij uri 
    
        $this->afbeelding = $afbeelding;
    
        }

    
}