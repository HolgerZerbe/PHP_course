<?php

function checkPasswortLaenge($passwort) {

    strlen($passwort) >=7 && strlen($passwort) <= 12 ? $okay = true : $okay = false;

    $okay ? $nachricht = "Ihr Passwort = $passwort ist zwischen 7 und 12 Zeichen lang" : $nachricht =  "Ihr Passwort $passwort entspricht nicht den Anforderungen";

    return $nachricht;
}

function checkPasswortLaengeBooleanReturn($passwort) {
    return strlen($passwort) >=7 && strlen($passwort) <= 12;
}


echo '<h3>strlen()</h3>';
echo 'Die Funktion strlen() gibt die anzahl der Zeichen eines Strings aus, die folgenden Funktionen nutzen diese Methode: <br>';


echo 'Ausgabe Funktion checkPasswortLaenge(): ' . checkPasswortLaenge("Passwort") . '<br>';
echo 'Ausgabe Funktion checkPasswortLaenge(): ' . checkPasswortLaenge("Mein_Passwort") . '<br>';

echo 'Ausgabe Funktion checkPasswortLaengeBooleanReturn("Passwort") ist wahr: ' . checkPasswortLaengeBooleanReturn("Passwort") . '<br>';
echo 'Ausgabe Funktion checkPasswortLaengeBooleanReturn("Mein_Passwort") ist falsch: ' . checkPasswortLaengeBooleanReturn("Mein_Passwort") . '<br>';


echo '<h3>strpos()</h3>';


$text="also hallo, das geht ja nicht, also ich meine ja nur";

echo 'Ausgabe der ersten Position des Suchbegriffs "also" im String "also hallo, das geht ja nicht, also ich meine ja nur" mit strpos($text, "also"): ' . strpos($text, "also") . '<br>';

echo 'gekoppelt mit einer kurzen if-Abfrage if(strpos($text, "also") { do something }, wird jedoch nichts getan, da die Position 0 als false interpretiert wird:<br>';

if (strpos($text, "also")) {
    echo "do something <br>";
} else {
    echo "do nothing <br>";}

echo 'Dies kann umgangen werden mit einer if-Abfrage mit Identitätsoperator ungleich und Bedingung false:  if(strpos($text, "also") !== false { do something }:<br>';

if (strpos($text, "also") !== false) {
    echo "do something <br>";
} else {
    echo "do nothing <br>";}

$textBeispielSubstr= "Die aufregend verrückte Welt von PHP";

echo '<h3>substr()</h3>';
echo 'Mit substr() werden Teile eines Strings herausgeschnitten, der ursprüngliche String bleibt erhalten: <br>';
echo '$textBeispielSubstr= "Die aufregend verrückte Welt von PHP" ergibt mit substr($textBeispielSubstr, 3, 10): ' . substr($textBeispielSubstr, 3, 10) . '<br>'; 
echo 'der erste Parameter ist der Sring, der zweite gibt an ab wann herausgeschnitten wird und der dritte gibt die Länge des herauszuschneidenen Stückes an <br>';
echo 'Fehlt der letzte Parameter, so wird ab dem zweiten Parameter abgeschnitten: <br>';
echo '$textBeispielSubstr= "Die aufregend verrückte Welt von PHP" ergibt mit substr($textBeispielSubstr, 30): ' . substr($textBeispielSubstr, 30) . '<br>'; 


echo '<h3>str_replace()</h3>';
echo 'mit str_replace werden Teile eines Stings durch einen anderen ersetzt.<br>';
echo 'Der ursprüngliche String wird nicht verändert, das Ergebnis muss in einer Variablen gespeichert werden.<br>';

$uetext = "Ueberschriften ohne Ue/ue mag ich überhaupt nicht";
echo '$uetext = "Ueberschriften ohne Ue/ue mag ich überhaupt nicht"<br>';

echo 'str_replace("Ue", "Ü", str_replace("ue", "ü", $uetext)) ersetzt alle ue durch ü und alle Ue durch ü: ' . str_replace("Ue", "Ü", str_replace("ue", "ü", $uetext)). '.<br><br>';
echo 'Es können auch Arrays mit Suchbegriffen und Ersetzungsbegriffen übergeben werden. <br>';

$umlautText = "Als Oekonom aergere ich mich uebrigens masslos, wenn nicht die deutsche Schreibweise mit Umlauten benutzt wird.
    Ueberhaupt ist das ganze Aergernis nur zustande gekomnmen, weil mache noergelnde Personen nicht mit ihrem Computer umgehen koennen.";

$zuErsetzen = ["Ae", "ae", "Oe", "oe", "Ue", "ue", "ss"];
$ersetztWorden = ["Ä", "ä", "Ö", "ö", "Ü", "ü", "ß"];

echo '$umlautText = "Als Oekonom aergere ich mich uebrigens masslos, wenn nicht die deutsche Schreibweise mit Umlauten benutzt wird.<br>
Ueberhaupt ist das ganze Aergernis nur zustande gekomnmen, weil mache noergelnde Personen nicht mit ihrem Computer umgehen koennen." <br>;';
echo '$zuErsetzen = ["Ae", "ae", "Oe", "oe", "Ue", "ue", "ss"];<br>';
echo '$ersetztWorden = ["Ä", "ä", "Ö", "ö", "Ü", "ü", "ß"];<br>';

echo str_replace($zuErsetzen, $ersetztWorden, $umlautText);

echo '<h3>nl2br()</h3>';
echo 'mit nl2br() werden die Zeilenumbrüche im String dargestellt: <br>';

echo nl2br(str_replace($zuErsetzen, $ersetztWorden, $umlautText));


?>