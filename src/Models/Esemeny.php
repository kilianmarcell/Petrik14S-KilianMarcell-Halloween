<?php

namespace Petrik14S\KilianMarcell\Halloween\Models;

use Petrik14S\KilianMarcell\Halloween\Models\Lako;
use DateTime;

class Esemeny {

    private $nev;
    private $szerzo;
    private $resztvevok;
    private $ido;

    public function __construct(string $nev, Lako $szerzo, array $resztvevok, DateTime $ido) {
        $this -> nev = $nev;
        $this -> szerzo = $szerzo;
        $this -> resztvevok = $resztvevok;
        $this -> ido = $ido;
    }

    public function getNev() {
        return $this -> nev;
    }

    public function getSzerzo() {
        return $this -> szerzo -> getNev();
    }

    public function getResztvevok() {
        return $this -> resztvevok;
    }

    public function getIdo() {
        return $this -> ido -> format('Y-m-d');
    }

}