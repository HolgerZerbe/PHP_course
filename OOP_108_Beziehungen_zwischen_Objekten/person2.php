<?php 

require_once 'adresse.php';

class Person2 {
    protected $name;
    protected $email;
    protected $adresse;

    
    public function __construct(array $daten) {

        if ($daten) {
        $this->setName($daten['name']);
        $this->setEmail($daten['email']);

        $this->adresse = new Adresse2();
        }
    }





    public function __toString() {
        return $this->getName() . ' hat folgende Email-Adresse ' . $this->getEmail() . ' und wohnt hier: ' . $this->getAdresse();
    }

    function setName($nameParam) {
        $this->name = $nameParam;
    }    
    function setEmail($emailParam) {
        $this->email= $emailParam;
    }    
    function setAdresseStrasse($strasseParam) {
        $this->adresse->setStrasse($strasseParam);
    }    
    function setAdresseHausnummer($hausnummerParam) {
        $this->adresse->setHausnummer($hausnummerParam);
    }    
    function setAdressePlz($plzParam) {
        $this->adresse -> setPlz($plzParam);
    }    
    function setAdresseOrt($ortParam) {
        $this->adresse -> setOrt($ortParam);
    }    
  



    function getName() {
        return $this->name;
    }
    function getEmail() {
        return $this->email;
    }
    function getAdresse() {
        return $this->adresse;
    }

}

?>