<?php

namespace Kunstwerken;


class Film extends  kunstwerkAbstract implements intAfbeelding, IntDuur
{
    
    public $afbeelding;
    public $duur;
    
    public function getAfbeelding(): ?string {
    
         return $this->afbeelding;

    }

    public function setAfbeelding(string $afbeelding): void {
        
        
    
        $this->afbeelding = $afbeelding;
    
    }

    
    public function getDuur() {
        
        
    
        return $this->duur;
    
    }
    
    public function setDuur($duur): void {
            
            
        
        $this->duur = $duur;
        
    }


    
}