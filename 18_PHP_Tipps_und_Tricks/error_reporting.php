<?php

error_reporting(E_ALL);

echo 'Die Funktion error_reporting() legt fest , wie detalliert PHP die Fehlermeldungen ausgeben soll. <br>
Dabei wird dieser Funktion ein Parameter (für die Definition der speziellen Fehlermeldungen) übergeben.<br><br>
error_reporting(E_ALL) zeigt alle Fehlermeldungen und Warnungen an:<br><br>

Wenn wie jetzt $daten = file_get_contents("daten/example.txt"); ausführen, erhalten wir folgende Meldung';

$daten = file_get_contents("daten/example.txt") . "<br><br>";



echo '<br><br>Die Parameter können mit den Bit-Operatoren "!" verneint werden, so unterdrückt error_reporting(<b>!</b>E_ALL); alle Fehlermeldungen.<br>
Äquivalent kann dies auch geschehen mit error_reporting(0);
<br><br>


Wenn wie jetzt $daten = file_get_contents("daten/example.txt"); ausführen, erhalten wir <b>keine</b> Meldung';

error_reporting(!E_ALL);

$daten = file_get_contents("daten/example.txt");

?>