<?php

class Fussball {
    protected $besitzer;
    protected $farbe;
    protected $durchmesser;
    protected $material;

    // public function __construct($besitzer, $farbe, $durchmesser, $material) {
    //     $this->besitzer = $besitzer;
    //     $this->farbe = $farbe;
    //     $this->durchmesser = $durchmesser;
    //     $this->material = $material;
    // }

    public function __construct(array $daten = []) {

        $this->setDaten($daten);
    }

    public function setDaten(array $daten) {

        if($daten) // leerer Array ergibt false 
            {
                foreach ($daten as $k => $v) {
                    $setterName = 'set' . ucfirst($k);
                    // pruefe ob ein passender Setter existiert
                    if (method_exists($this, $setterName)) {
                        $this->$setterName($v); // Setteraufruf
                    }
                }
            }
        }

    function setBesitzer($besitzerParam) {
        $this->besitzer = $besitzerParam;
    }    
    function setFarbe($farbeParam) {
        $this->farbe = $farbeParam;
    }    
    function setDurchmesser($durchmesserParam) {
        $this->durchmesser = $durchmesserParam;
    }    
    function setMaterial($materialParam) {
        $this->material = $materialParam;
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
    function getMaterial() {
        return $this->material;
    }

    // function beschreibeFussball() {
   
    //     return $this->getBesitzer() . '`s Fussball ist ' . $this->getFarbe() . ' und hat einen Durchmesser von ' . $this->getDurchmesser() . ' cm und ist aus ' . $this->getMaterial() . '.';
    // }

    function __toString() {
   
        return $this->getBesitzer() . '`s Fussball ist ' . $this->getFarbe() . ' und hat einen Durchmesser von ' . $this->getDurchmesser() . ' cm und ist aus ' . $this->getMaterial() . '.';
    }

}

?>