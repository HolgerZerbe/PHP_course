<?php 
// eigene Variante fur htmlspecialchars():

function maskiereUmlaute($satz) {
    
    $umlaute = ["Ä", "ä", "Ö", "ö", "Ü", "ü"];
    $htmlSpecialChars = ["&Auml;", "&auml;", "&Ouml;", "&ouml;", "&Uuml;", "&uuml"];

    return str_replace($umlaute, $htmlSpecialChars, $satz);

}


echo (maskiereUmlaute("ich Ökonom ärgere mich überhaupt nicht über PHP"));

?>
