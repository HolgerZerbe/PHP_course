<?php 

echo time() . '<br>';

echo 'Das aktuelle Datum ist: ' . strftime('%d.%m.%y') . '<br>';

echo 'Die aktuelle Uhrzeit ist: '. strftime('%H.%M.%S') . '<br>';

// phpinfo()

echo 'Der Timestamp für meinen Geburtstag 0 Uhr ist: '. mktime(0,0,0,2,24,1969) . '<br>';

echo 'Der Timestamp für die Landung Kolumbus` in Amerika am 03. August 1492 (12 Uhr mittags) ist: ' . mktime(12,0,0,8,3,1492) . '<br>';


$datum = "15.10.2020";
$uhrzeit = "08:10:23";

$datumSplitted = explode(".", $datum);
$uhrzeitSplitted = explode(":", $uhrzeit);

echo '$datum: ' . $datum . '<br>';
echo '$uhrzeit: ' . $uhrzeit . '<br>';

echo '$datumSplitted = ' . var_dump($datumSplitted) . '<br>';
echo '$uhrzeitSplitted = ' . var_dump($uhrzeitSplitted) . '<br>';

echo 'Der Timestamp für die Variable $datum und $uhrzeit ist: ' . mktime($uhrzeitSplitted[0],$uhrzeitSplitted[1],$uhrzeitSplitted[2],$datumSplitted[1],$datumSplitted[0],$datumSplitted[2]) . '<br>';  // Konvertierung der Strings zu Numbers erfolgt automatisch


// Alternativ mit Destructuring gesplittet, so dass einzelne Variablen enstehen statt eines Arrays:

[$tag, $monat, $jahr] = explode(".", $datum);
[$stunde, $minute, $sekunde] = explode(":", $uhrzeit);

echo 'Der Timestamp für die Variable $datum und $uhrzeit ist: ' . mktime($stunde,$minute,$sekunde,$monat,$tag,$jahr) . '// Parameter wurden hier mit destructered Variablen an die Funktion mktime() übergeben<br>';

echo strftime('%Y/%M/%d %H:%M', mktime($stunde, $minute, $sekunde, $monat, $tag, $jahr)) . '// Darstellung mit strftime bei 2 ParameterN: 1) Darstellungsstring 2) timestamp als rückgabewert der Funktion mktime() <br>';

echo 'Funktion strtotime() : ' . strtotime($datum . " " . $uhrzeit) . ' // nimmt einen String in der Form "TT.MM.JJJJ HH:MM:SS" als Parameter und gibt den timestamp aus, die Variablen $datum . " " .  $uhrzeit können verkettet als dieser Parameter übergeben werden'; 
?>