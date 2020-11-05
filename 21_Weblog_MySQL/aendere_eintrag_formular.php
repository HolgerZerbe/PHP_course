<?php

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';
session_start();

// Nur ein eingeloggter Benutzer darf Einträge bearbeiten.
if (!istEingeloggt()) {
    redirect('index.php');
}
// Wenn es einen GET request gab (in diesem Fall nur bei einem Aufruf
// von einem anderen File),
// dann hole den Eintrag mit der als URL-Parameter übergebenen id aus 
// der Datenbank und nutze den Datensatz als value für die Inputfelder



if ($_GET) {

    $index = $_GET["id"];

    $sql = "SELECT * FROM comments WHERE id = $index";
    
    $statement = $db->query($sql);

    $eintrag = $statement->fetch();

}


// Wenn es einen POST request gab (wenn also das Eingabeformular geändert an
// dieses File geschickt wird), dann update die Datenbank und redirecte zu index.php


if ($_POST) {

     $eintrag = [
    'id' => intval($_POST['id']),
    'titel' => trim($_POST['titel']),
    'inhalt' => trim($_POST['inhalt']),
    'erstellt_am' => time(),

];
    
    $sql = 'UPDATE comments SET titel=:titel, erstellt_am=:erstellt_am, inhalt=:inhalt WHERE id=:id;';

    $statement = $db->prepare($sql);

    $statement->execute($eintrag);

    $indexnumber = $eintrag['id'];

    redirect("eintrag_danke.php?id=$indexnumber");

}

?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Weblog - Neuen Eintrag schreiben</title>
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet" />
</head>

<body>

    <div id="gesamt">

        <header id="kopf">
            <h1>Mein Weblog</h1>
        </header>

        <section id="content">

          <h1>Ändern Sie hier den Eintrag:</h1>


          <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">

            <input type="hidden" name="id" id="id" required="required" value=<?=$eintrag['id']; ?> />  
            <input type="text" name="titel" id="titel" required="required" value="<?=$eintrag['titel']; ?> "/>
            <textarea name="inhalt" id="inhalt" cols="50" rows="10" required="required" ><?=$eintrag['inhalt']; ?></textarea>
            <input type="submit" value="Ändern" />

          </form>

        </section>

        <aside id="menu">
            <?php require 'inc/hauptmenu.tpl.php'; ?>
        </aside>

        <footer id="fuss">
            Das ist das Ende
        </footer>

    </div>

</body>

</html>