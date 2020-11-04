<?php

require_once 'inc/datenbank.inc.php';
require_once 'inc/funktionen.inc.php';

// Nachfolgend Beispiel, wie mit einer SQL-Anweisung als Eingabe
// eine Datenbank manipuliert werden kann:


// if ($_POST) {
//     $sql = 'SELECT * FROM filme' .
//         ' WHERE titel LIKE "%' . $_POST['titel'] . '%"';

//     $statement = $db->query($sql);
//     $daten = $statement->fetchAll();
// }

// Um dies zu vermeiden, sollten Prepared Statements mit Platzhaltern verwendet werden,
// dann ist dies nicht möglich:

if ($_POST) {
    $eingaben = [
        'titel' => '%' . $_POST['titel'] . '%',
    ];

    $sql = 'SELECT * FROM filme WHERE titel LIKE :titel';

    $statement = $db->prepare($sql);
    $statement->execute($eingaben);
    $daten = $statement->fetchAll();
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Suche</title>
</head>

<body>

    <form
        action="<?= bereinige($_SERVER['PHP_SELF']) ?>"
        method="post"
    >
        Suche: <input type="text" name="titel" />
        <input type="submit" value="suchen" />
    </form>

    <?php if (isset($daten)): ?>
        <p>Suchergebnis: </p>

        <ul>
            <?php foreach ($daten as $eintrag): ?>
                <li>
                    <?= bereinige($eintrag['titel']) ?>:
                    <?= (int)$eintrag['dauer'] ?> Minuten
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</body>

</html>