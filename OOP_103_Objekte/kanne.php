<?php

class Kanne {
    public $art;
    public $getraenk;
    public $inhalt_in_liter;
    public $gefüllt;

    function leereKanne () {

        $this->gefüllt=false;
        $this->inhalt_in_liter=0;
        $this->getraenk=null;

    }
}