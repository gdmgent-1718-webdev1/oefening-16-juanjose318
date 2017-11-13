<?php

namespace Kunstwerken;


class Dans extends kunstwerkAbstract implements intAfbeelding
{
    
    public $afbeelding;
    
    public function getAfbeelding(): ?string {
    
  

    return $this->afbeelding;

    }
    public function setAfbeelding(string $uri): void {
       
      
    
        $this->afbeelding = $afbeelding;
    
    }

    
}