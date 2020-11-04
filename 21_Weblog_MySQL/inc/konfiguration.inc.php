
<?php

error_reporting(E_ALL); // im produktiven Umfeld deaktivieren
date_default_timezone_set('Europe/Berlin'); // oder php.ini
require_once dirname(__FILE__) . '/datenbank.inc.php';


const BENUTZER_DATEN = [
    'inewton' => [
        'vorname' => 'Isaac',
        'nachname' => 'Newton',
        'passwort' => 'apfel',
    ],
    'jsartre' => [
        'vorname' => 'Jean-Paul',
        'nachname' => 'Sartre',
        'passwort' => 'vernunft',
    ],
    'ghegel' => [
        'vorname' => 'Georg Wilhelm Friedrich',
        'nachname' => 'Hegel',
        'passwort' => 'logisch',
    ],
];
