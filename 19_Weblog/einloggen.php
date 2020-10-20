<?php

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';
session_start();


// Prüfe alle Benutzer auf Übereinstimmung der übergebenen Daten

    echo var_dump(array_keys(BENUTZER_DATEN));


    if ((in_array(trim($_POST['benutzername']),array_keys(BENUTZER_DATEN), true)) &&  (BENUTZER_DATEN[trim($_POST['benutzername'])]['passwort'] === trim($_POST['passwort']))){
            

                //Wenn ja, logge den Benutzer ein
                echo var_dump((BENUTZER_DATEN[trim($_POST['benutzername'])]));

                loggeEin(trim($_POST['benutzername']));
        
        
    }



/*
 * Leite zur index.php um. Der Besucher wird entweder das
 * Login-Formular sehen, wenn die Daten falsch waren, oder
 * das Hauptmenu, wenn der Login erfolgreich war.
 */
redirect('index.php');
