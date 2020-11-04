<?php

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';
session_start();


// Prüfe alle Benutzer auf Übereinstimmung der übergebenen Daten

// überprüfe dazu, ob in der Konstanten BENUTZER_DATEN (welche ein Array ist), 
// als key der Benutzername vorhanden ist.
// Wenn ja, dann überprüfe, ob das Passwort identisch ist
// (äquivalent zur Datenbankabfrage mit MySQL)


    if ((in_array(trim($_POST['benutzername']),array_keys(BENUTZER_DATEN), true)) &&  (BENUTZER_DATEN[trim($_POST['benutzername'])]['passwort'] === trim($_POST['passwort']))){
            
                // Wenn ja, logge den Benutzer ein und redirecte 
                // ihn zu index.php um. Der Besucher sieht
                // das Hauptmenu, wenn der Login erfolgreich war.

                loggeEin(trim($_POST['benutzername']));
                redirect('index.php');
        
        
    } else {
                // Wenn nein, leite ihn auf die neu erstellte
                // Seite einloggen_nicht_erfolgreich.php um,
                // wo er eine entsprechende Seite sieht.

                redirect('einloggen_nicht_erfolgreich.php');


    }


