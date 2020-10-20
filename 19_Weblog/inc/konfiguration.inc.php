
<?php

error_reporting(E_ALL); // im produktiven Umfeld deaktivieren
date_default_timezone_set('Europe/Berlin'); // oder php.ini

const PFAD_EINTRAEGE = 'daten/eintraege.txt';

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
