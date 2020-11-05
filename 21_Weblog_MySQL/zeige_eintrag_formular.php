<?php

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';
session_start();

// Nur ein eingeloggter Benutzer darf neue Einträge posten.
if (!istEingeloggt()) {
    redirect('index.php');
}
// Wenn es einen POST request gab (es also die Superglobabe $_POST gibt),
// dann erstelle einen neuen Eintrag im Format der anderen Einträge.
// Hole die alten Einträge, hänge den neuen an und speichere.
// Ermittel den letzten index und redirecte mit Übergabe des index als URL-Parameter.

if ($_POST) {

    $eintrag = [
    'titel' => trim($_POST['titel']),
    'inhalt' => trim($_POST['inhalt']),
    'autor' => $_SESSION['eingeloggt'],
    'erstellt_am' => time(),
];

// speichere den neuen Eintrag in der Datenbank

$sql = 'INSERT INTO comments (titel, erstellt_am, autor, inhalt) VALUES (:titel, :erstellt_am, :autor, :inhalt)';

$statement = $db->prepare($sql);

// echo var_dump($eintrag);

$statement->execute($eintrag);


// lese den höchsten Index aus der Datenbank aus (da der Index auto_increment ist, wird immer der 
// neueste Index ausgelesen) und redirecte zu eintrag_danke.php mit dem Index als URL-Parameter

$sql = 'SELECT MAX(id) FROM comments';
    
$statement = $db->query($sql);

$index = $statement->fetch();
$indexnumber = intval($index['MAX(id)']);


// echo var_dump($indexnumber);

redirect("eintrag_danke.php?id=$indexnumber");
};



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

          <h1>Schreiben Sie hier einen neuen Eintrag:</h1>

          <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
              <input type="text" name="titel" id="titel" required="required" placeholder="Titel" />
              <textarea name="inhalt" id="inhalt" cols="50" rows="10" required="required" placeholder="Inhalt"></textarea>
              <input type="submit" value="Eintragen" />
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