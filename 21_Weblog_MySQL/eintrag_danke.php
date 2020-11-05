<?php

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';
session_start();

/*
 * Wenn der Benutzer nicht eingeloggt ist oder die Seite nicht
 * über POST aufgerufen, also das Formular nicht abgeschickt
 * wurde, leite auf index.php um.
 */
if ((!istEingeloggt()) || empty($_GET)) {
    redirect('index.php');
}


// Hole den letzten Eintrag aus der Datenbank mit dem übergebenen URL-Parameter "id"

$index = $_GET["id"];

$sql = "SELECT * FROM comments WHERE id = $index";
    
$statement = $db->query($sql);

$eintrag = $statement->fetch();

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Weblog - Eintrag speichern</title>
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet" />
</head>

<body>

    <div id="gesamt">

        <header id="kopf">
            <h1>Mein Weblog</h1>
        </header>

        <section id="content">

            <header>
                <h1>Folgender Eintrag wurde erfolgreich gespeichert:</h1>
            </header>

            <article class="zitat">
              <header class="eintrag_oben">

                <!-- Zeige den letzten Beitrag an (nutze dazu die o.a. Variablen $eintraege und $index) -->

                <h1><?= bereinige($eintrag['titel']) ?></h1>
              </header>

              <p>
                <?= nl2br(bereinige($eintrag['inhalt'])) ?>
              </p>
            </article>

            <p>
                <a href="index.php" class="backlink">Zurück zur Hauptseite</a>
            </p>

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