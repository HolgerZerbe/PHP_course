<?php

function checkPasswortLaenge($passwort) {

    strlen($passwort) >=7 && strlen($passwort) <= 12 ? $okay = true : $okay = false;

    $okay ? $nachricht = "Ihr Passwort = $passwort ist zwischen 7 und 12 Zeichen lang" : $nachricht =  "Ihr Passwort $passwort entspricht nicht den Anforderungen";

    return $nachricht;
}

echo checkPasswortLaenge("Passwort") . '<br>';
echo checkPasswortLaenge("Mein_Passwort");


?>