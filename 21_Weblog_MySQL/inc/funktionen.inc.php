<?php

// require_once './datenbank.inc.php';
require_once dirname(__FILE__) . '/datenbank.inc.php';



function bereinige($benutzerEingabe, $encoding = 'UTF-8')
{
    return htmlspecialchars(
        strip_tags($benutzerEingabe),
        ENT_QUOTES | ENT_HTML5,
        $encoding
    );
}

function redirect($url)
{
    header('Location: ' . $url);
    exit;
}

function istEingeloggt()
{
    return isset($_SESSION['eingeloggt']);
}

function loggeEin($benutzername)
{
    $_SESSION['eingeloggt'] = $benutzername;
}

function loggeAus()
{
    unset($_SESSION['eingeloggt']);
}
