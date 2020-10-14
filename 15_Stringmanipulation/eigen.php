<?php 

echo time() . '<br>';

echo 'Das aktuelle Datum ist: ' . strftime('%d.%m.%y') . '<br>';

echo 'Die aktuelle Uhrzeit ist: '. strftime('%H.%M.%S') . '<br>';

// phpinfo()

echo 'Der Timestamp für meinen Geburtstag 0 Uhr ist: '. mktime(0,0,0,2,24,1969) . '<br>';

echo 'Der Timestamp für die Landung Kolumbus` in Amerika am 03. August 1492 (12 Uhr mittags) ist: ' . mktime(12,0,0,8,3,1492) . '<br>';

?>