<?php

class Esemeny {

    private $nev;
    private $szerzo;
    private $resztvevok;
    private $ido;

    public function __construct(string $nev, Lako $szerzo, $resztvevok = array(), DateTime $ido) {
        $this -> nev = $nev;
        $this -> szerzo = $szerzo;
        $this -> resztvevok = $resztvevok;
        $this -> ido = $ido;
    }

    public function getNev() {
        return $this -> nev;
    }

    public function getSzerzo() {
        return $this -> szerzo;
    }

    public function getResztvevok() {
        return $this -> resztvevok;
    }

    public function getIdo() {
        return $this -> ido;
    }

}