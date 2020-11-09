<?php
class Kursteilnehmer
{
    protected $vorname;
    protected $nachname;
    protected $alter;
    protected $kurse;

    public function __construct($vorname, $nachname, $geburtsdatum, $kurse){

        $this->setVorname($vorname);
        $this->setNachname($nachname);
        $this->setAlter($geburtsdatum);
        $this->setKurse($kurse);
    }

    public function setVorname($vorname) {
        $this->vorname = $vorname;
    }

    public function setNachname($nachname) {
        $this->nachname = $nachname;
    }

    public function setAlter($geburtsdatum) {
        $this->alter = 2020 - getdate(strtotime($geburtsdatum))['year'];
    }

    public function setKurse($kurse) {

        if (is_string($kurse)) {

        $kursArray = (explode(',', $kurse));
        $this->kurse = $kursArray;
    }
        elseif (is_array($kurse)) {

            $kursArray = null;
            foreach ($kurse as $kurs) {
                $kursArray[] = trim($kurs);
            }
        } else {
            $kursArray = ['keine Kurse angegeben'];
        }
    $this->kurse = $kursArray;
    }

    public function getVorname() {
        return $this->vorname;
    }

    public function getTeilnehmer() {

        $teilnehmerDaten = $this->vorname . ' ' . $this->nachname . ' ist ' . $this->alter . ' Jahre alt und hat folgende Kurse belegt: ';

        for ($i=0; $i < count($this->kurse); $i++) {

            if ($i < (count($this->kurse) - 1)) {
                $teilnehmerDaten .= $this->kurse[$i] . " / ";
            } 
            
            else {
                $teilnehmerDaten .= $this->kurse[$i] . ".";
            }
        }

        return $teilnehmerDaten;
    }
}