<?php 
// eigene Variante fur ucwords():

function formatiereErstenBuchstabenJedesWortsGross($satz) {

    $satzArray = explode(" ", $satz);
    $satzArrayGross = [];

    foreach ($satzArray as $word) {
        $satzArrayGross[] = ucfirst($word);
    } 

    $satzGross = implode(" ", $satzArrayGross );

    return $satzGross;

}


echo formatiereErstenBuchstabenJedesWortsGross("das ist ein toller satz");

?>
