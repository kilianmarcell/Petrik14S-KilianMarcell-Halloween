<?php

namespace Petrik14S\KilianMarcell\Halloween\Models;

class Lako {
    
    private $nev;

    public function __construct(string $nev) {
        
        $this->nev = $nev;
        
    }

    public function getNev() : string {
        return $this->nev;
    }
}