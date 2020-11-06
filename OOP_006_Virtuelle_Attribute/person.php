<?php

class Person {
    protected $vorname = null;
    protected $nachname = null;
    protected $geburtTimesstamp = null;

    function setVorname($vornameParam) {
        $this->vorname = $vornameParam;
    }

    function setNachname($nachnameParam) {
        $this->nachname = $nachnameParam;
    }

    function setGeburtTimestamp($time) {
        $this->geburtTimestamp = $time;
    }

    function getVorname() {
        return $this->vorname;
    }

    function getNachname() {
        return $this->nachname;
    }

    function getGeburtTimestamp() {
        return $this->geburtTimestamp;

    }
    function getName() {
        $fullName = $this->getVorname() . " " . $this->getNachname();
        return $fullName;
    }

    function getGeburtstag() {
        $geburtstag = getdate($this->getGeburtTimestamp());
        return $geburtstag['mday'] . "." . $geburtstag['mon'] . ".";
    }

    function setName($ganzerName) {
        $namenArray = explode(" ", $ganzerName);
        $this->setVorname($namenArray[0]);
        $this->setNachname($namenArray[1]);
    }

    function setGeburtstag($datumsString) {
        $timestampAmGeburtstag = strtotime($datumsString);
        $this->setGeburtTimestamp($timestampAmGeburtstag);
    }


}