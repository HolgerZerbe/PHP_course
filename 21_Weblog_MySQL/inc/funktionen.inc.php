<?php

// require_once './datenbank.inc.php';
require_once dirname(__FILE__) . '/datenbank.inc.php';


// function holeEintraege($umgedreht = false)
// {
//     if (file_exists(PFAD_EINTRAEGE)) {
//         $eintraege = unserialize(file_get_contents(PFAD_EINTRAEGE));
//         if ($umgedreht === true) {
//             $eintraege = array_reverse($eintraege);
//         }
//     } else {
//         $eintraege = [];
//     }

//     return $eintraege;
// }

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

// function speichereEintraege($eintraege) {

//     $sql = 'INSERT INTO comments (titel, erstellt_am, autor, inhalt) VALUES (:titel, :erstellt_am, :autor, :inhalt)';
    
//     foreach ($eintraege as $eintrag) {
//     $statement = $db->prepare($sql);
//     $statement->execute($eintrag);
//     }

// }
