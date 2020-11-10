<?php

// Zum einfacheren Umgang mit Datumsangaben wurde das DateTime-Klasse geschaffen,
// sie ermöglicht die Bildung eines DateTime-Objekt zur standartisiereten Datumangabe.
// Gebildet wird es mit dem Schlüsselwort new und dem Kontruktor kann 
// ein Parameter übergeben werden.


// Folgende fünf Anweisungen ergeben ein DateTime-Objekt des Datums und der Uhrzeit
// zum Zeitpunkt der Ausführung, empfehlenswert sind jedoch nur die ersten drei:

$datetimeJetzt1 = new DateTime();
$datetimeJetzt2 = new DateTime('now');
$datetimeJetzt3 = new DateTime(null);
$datetimeJetzt4 = new DateTime('');
$datetimeJetzt5 = new DateTime(false);


// Da es sich bei den $datetime_ um Instanzen der PHP-Klasse DateTime
// und somit um Objekte handelt, ist eine Ausgabe mit echo nicht möglich,
// da DateTime die magische Methode __toString() fehlt.
// Stattdessen muss die Methode format() genutzt werden, sie erwartet als
// Parameter einen String, welche das Format der Ausgabe definiert

// ->format('Y-m-d') ergibt yyyy-mm-dd nach Standard ISO 8601
// ->format('y-m-d') ergibt yy-mm-dd 
// ->format('d.m.Y') ergibt dd.mm.yyyy deutsche Schreibweise
// ->format('Y-m-d H:i:s') ergibt yyyy-mm-dd hh:minmin:ss mit Stundeangabe 0-24 Uhr
// ->format('Y-m-d h:i:s') ergibt yyyy-mm-dd hh:minmin:ss mit Stundeangabe 0-12 Uhr
// ->echo gettype(object->format('Y-M-d'))  ergibt string

// Achtung, alle herausgelesenen Daten sind immer STRINGS!

echo $datetimeJetzt1->format('Y-m-d') . '<hr>';
echo $datetimeJetzt1->format('y-m-d') . '<hr>';
echo $datetimeJetzt1->format('d.m.Y') . '<hr>';
echo $datetimeJetzt1->format('Y-m-d H:i:s') . '<hr>';
echo $datetimeJetzt1->format('Y-m-d h:i:s') . '<hr>';
echo $datetimeJetzt1->format('Y-M-d') . '<hr>';
echo gettype($datetimeJetzt1->format('Y')) . '<hr>'; 


// Man kann auch Datumsangaben übergeben, dann wird beim Erstellen des
// neuen Objekts dieses Wert übernommen, wird dabei im als Parameter übergebenen String
// im Format 'yyyy-mm-dd hh:minmin:ss) keine Uhrzeit angegeben, so wird das Datum mit
// der Uhrzeit 00:00:00 erstellt


$datetimeMitDatum = new DateTime('1969-02-24');
$datetimeMitDatumUndUhrzeit = new DateTime('1969-02-24 05:20:00');

echo $datetimeMitDatum->format('Y-m-d H:i:s') . '<hr>';
echo $datetimeMitDatumUndUhrzeit->format('Y-m-d H:i:s') . '<hr>';

// Es kann dem Konstruktor auch eine abweichende Zeit als Parameter übergeben werden,
// er rechnet dann + oder min der angebenenen Zeitspanne von 'now'

$datetimeVor3Tagen = new DateTime('-3 days');
$datetimeIn15Minuten = new DateTime('+ 15 min');

echo $datetimeVor3Tagen->format('Y-m-d H:i:s') . '<hr>';
echo $datetimeIn15Minuten->format('Y-m-d H:i:s') . '<hr>';

// Mit der Methode modify() kann ein bereits erstelltes DateTime_objekt geändert werden,
// diese Methode erwartet ein String in dem die Zeitänderung mit +/- weeks, days oder years 
// (nur als Beispiel) angebenen wird, dabei wir das ursprüngliche Objekt überschrieben

$geburstag = new DateTime('1969-02-24');

// mache dich 5 Jahre jünger:
$geburstag->modify('+ 5 years');
echo $geburstag->format('Y-m-d') . '<hr>';


// Zum Ermitteln einer Zeitdifferenz zwischen zwei Datumsangaben gibt es 
// die Methode diff(). Sie erwartet ein DateTime-Objekt als Parameter und
// vergleicht diesen Paramter mit dem Objekt, auf welche diese Methode 
// angewendet wird

$geburt = new DateTime('1939-09-30');
$tod = new DateTime('1988-05-11');

$differenz = $geburt->diff($tod);

echo $differenz->format('%a') . '<hr>'; // gibt volle Tage aus
echo $differenz->format('%y') . '<hr>'; // gibt volle Jahre aus

// mehr Informationen unter https://www.php.net/manual/en/dateinterval.format.php
