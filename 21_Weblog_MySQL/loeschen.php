<?php

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';
session_start();

// Nur ein eingeloggter Benutzer darf neue Einträge posten.
if (!istEingeloggt()) {
    redirect('index.php');
}
// Wenn es einen GET request gab (es also die Superglobabe $_GET gibt),
// dann lese die id (den URL-Parameter aus) und 
// lösche mit dieser id den Beitrag in der Datenbank. 
// Danach redirecte wieder zu index.php

if ($_GET) {

    $id = $_GET['id'];
    $sql = "DELETE FROM comments WHERE id = $id";
    $db->query($sql);
    redirect('index.php');
}

?>