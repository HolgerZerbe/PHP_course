<?php

class Fussball {
    protected $besitzer='Niemand';
    protected $farbe = 'durchsichtig';
    protected $durchmesser = 1000000;

    function setBesitzer($besitzerParam) {
        $this->besitzer = $besitzerParam;
    }
    function setFarbe($farbeParam) {
        $this->farbe = $farbeParam;
    }
    function setDurchmesser($durchmesserParam) {
        $this->durchmesser = $durchmesserParam;
    }

    function getBesitzer() {
        return $this->besitzer;
    }
    function getFarbe() {
        return $this->farbe;
    }
    function getDurchmesser() {
        return $this->durchmesser;
    }

    function beschreibeFussball() {
   
        return $this->getBesitzer() . '`s Fussball ist ' . $this->getFarbe() . ' und hat einen Durchmesser von ' . $this->getDurchmesser() . ' cm.';
    }
}

?>