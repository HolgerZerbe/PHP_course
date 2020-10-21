<?php 

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';
session_start();



?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Weblog - Ausloggen</title>
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet" />
</head>

<body>

    <div id="gesamt">

        <header id="kopf">
            <h1>Mein Weblog</h1>
        </header>

        <section id="content">

            <p style = "color: darkred;">
                Das hat leider nicht geklappt!<br />
                Bitte versuchen Sie es erneut.
            </p>

            <p>
                <a href="index.php" class="backlink">Zurück zur Hauptseite</a>
            </p>

        </section>

        <aside id="menu">
            <?php require 'inc/loginformular.tpl.php'; ?>
        </aside>

        <footer id="fuss">
            Das ist das Ende
        </footer>

    </div>

</body>

</html>