<?php 

class Adresse2 {
    protected $strasse = 'leer';
    protected $hausnummer = 'leer';
    protected $plz = 'leer';
    protected $ort = 'leer';

    
    public function __construct(array $daten = []) {

        $this->setDaten($daten);
    }

    public function setDaten(array $daten) {

        if($daten) 
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

    
    public function __toString() {
        return $this->getStrasse() . ' ' . $this->getHausnummer() . ', '. $this->getPlz() . ' ' . $this->getOrt();
        
    }


    function setStrasse($strasseParam) {
        $this->strasse = $strasseParam;
    }    
    function setPlz($plzParam) {
        $this->plz= $plzParam;
    }    
    function setOrt($ortParam) {
        $this->ort = $ortParam;
    }    
    function setHausnummer($hausnummerParam) {
        $this->hausnummer = $hausnummerParam;
    }   
   



    function getStrasse() {
        return $this->strasse;
    }
    function getPlz() {
        return $this->plz;
    }
    function getOrt() {
        return $this->ort;
    }
    function getHausnummer() {
        return $this->hausnummer;
    }

}

?>