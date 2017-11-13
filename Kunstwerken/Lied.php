<?php

namespace Kunstwerken;


class Lied extends kunstwerkAbstract implements intDuur
{

public $duur;

public function getDuur() {
        
        
    
        return $this->duur;
    
    }
    
    public function setDuur($duur): void {
            
            
        
        $this->duur = $duur;
        
    }

}