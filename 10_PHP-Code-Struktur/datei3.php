<?php

// require 'datei1.php';
// echo "Bin in Datei 3";

// Führt zu keiner Ausgabe, die Dateien werden immer wieder eingebunden

// require bindet Dateien bei jeden Aufruf wieder ein, require_once stopped nach dem ersten Einbinden

require_once 'datei1.php';
echo "Bin in Datei 3";

// include und include_once funktionieren äquivalent zu den require, sie erzeugen jedoch keine Fehlermeldung
// sondern nur eine Warnung

// Funktionen sollten wenn möglich in einer Bibliothek ausgelagert werden und dann mit require angefordert werden
// in diesen Bibliotheken wird kein Code geschrieben ausserhalb von Funktionen

?>
