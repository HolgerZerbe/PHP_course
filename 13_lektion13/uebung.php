<?php 
    function druckeMehrfach($string, $anzahl) {
        for ($i = 0; $i < $anzahl; $i++) {
            echo $string;
        }
    } 

    
    function druckeMehrfach2($string, $anzahl=3) {
        for ($i = 0; $i < $anzahl; $i++) {
            echo $string;
        }
    } 


    function druckeMehrfachMitReturn ($string, $anzahl=3) {

        $ergebnis=null;

        for ($i = 0; $i < $anzahl; $i++) {
            $ergebnis .= $string;
        }
        return $ergebnis;
    } 


    function zaehleWoerter($text) {
        $anzahlWoerter = count(explode(" ", $text));
        return $anzahlWoerter;
    }


    function teileWoerter($text) {
        return explode(" ", $text);
    }
    
    
    druckeMehrfach("Halloooooo???!!! ", 7);
    druckeMehrfach("IchUndDuGleichWir ", 20);
    druckeMehrfach("... und nochmal! ", 5);
    druckeMehrfach("Lalilu ", 12);

    druckeMehrfach2("BlaBlaBla ", 10);
    druckeMehrfach2("Nur mit einem Parameter! ");

    $returnedErgebnis = druckeMehrfachMitReturn("Return ", 50);
    echo $returnedErgebnis;

    echo zaehleWoerter("Ich bin dann mal weg!");
    $teileWoerterArray[] = teileWoerter("Ich bin dann mal weg!");
    
    $teileWoerterString = implode(", ", $teileWoerterArray[0]);
    
    echo $teileWoerterString;
    ?>
 

