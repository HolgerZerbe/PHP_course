<?php

class EinwohnerEntenhausen {
    protected $vorname = null;
    protected $nachname = null;
    protected $tierart = null;
    protected $verwandtMitOmaDuck = true;

    public function getVorname(){
        return $this->vorname;
    }

    function getNachname()
    {
        return $this->nachname;
    }

    function getTierart()
    {
        return $this->tierart;
    }

    function getVerwandtMitOmaDuck()
    {
        return $this->verwandtMitOmaDuck;
    }

    function setVorname($vornameParam) {

        $this->vorname=$vornameParam;
    }

    function setNachname($nachnameParam) {

        $this->nachname=$nachnameParam;
    }

    function setTierart($tierartParam) {

        $this->tierart=$tierartParam;

    }

    function setVerwandtMitOmaDuck($verwandMitOmaDuckParam) {

        $this->verwandtMitOmaDuck=$verwandMitOmaDuckParam;

    }


    function setEinwohner($vornameParam, $nachnameParam, $tierartParam, $verwandtMitOmaDuckParam) {

        $this->vorname=$vornameParam;
        $this->nachname=$nachnameParam;
        $this->tierart=$tierartParam;
        $this->verwandtMitOmaDuck=$verwandtMitOmaDuckParam;

    }
}