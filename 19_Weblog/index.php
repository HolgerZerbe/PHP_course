<?php

require_once 'inc/konfiguration.inc.php';
require_once 'inc/funktionen.inc.php';
session_start();

// In Blogs werden Einträge in umgekehrter Reihenfolge angezeigt
$eintraege = holeEintraege(true);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Weblog - Einträge</title>
    <link href="css/stylesheet.css" type="text/css" rel="stylesheet" />
</head>

<body>

    <div id="gesamt">

        <header id="kopf">
            <h1>Mein Weblog</h1>
        </header>

        <section id="content">

            <?php foreach ($eintraege as $e): ?>
                <?php require 'inc/eintrag.tpl.php'; ?>
            <?php endforeach; ?>

        </section>

        <aside id="menu">
            <?php if (istEingeloggt()): ?>
                <?php require 'inc/hauptmenu.tpl.php'; ?>
            <?php else: ?>
                <?php require 'inc/loginformular.tpl.php'; ?>
            <?php endif; ?>
        </aside>

        <footer id="fuss">
            Das ist das Ende
        </footer>

    </div>

</body>

</html>