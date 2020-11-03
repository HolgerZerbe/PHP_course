<?php

// Erzeugen eines neues Datanbank-Objektes (PDO):

$optionen = [PDO ::ATTR_ERRMODE => PDO::ERRMODE_WARNING,];

// Fehlermeldunsgeinstellung:
// unter den PDO-Attributen kann man die zu erhaltenen Fehlermeldung von mySQl einstellen,
// Fehlermeldung unterdücken, gibt keine Fehlermeldung aus = PDO::ATTR_ERRMODE => PDO::ERRMODE_SILENT
// Fehlermeldung Warnung, gibt nur eine Warnung aus, Skript läuft weiter = PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
// Fehlermeldung Exeption, gibt Fehlermeldung aus, Skript stoppt = PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION

$db = new PDO('mysql:host=localhost;dbname=mysql; port=3306', // Datenbankverbindung
             'root',                                          // Benutzername
             '',                                              // Passwort
            $optionen);                                       // optiionale PDO-Attribute

$statement = $db->query('SELECT * FROM user');
$daten = $statement-> fetchAll(); // liefert immer einen Array zurück, auch wenn nur ein Datensatz abgefragt wird

// für die Abfrage nur eines Datensatzes ist die Methode fetch() besser als fetchAll() geeignet:

$statement_2 = $db->query('SELECT host, user FROM user WHERE user = "root" and host = "localhost" LIMIT 1');
$daten_2 = $statement_2 -> fetch();

// Sollten mehrere Satensätze ankommen, liefert fetch() den ersten Datensatz auf, wird die Methode erneut durchgeführt
// den zweiten usw.. Dies lässt sich gut in einer while-Schleife nutzen:

$statement_3 = $db->query('SELECT * FROM user');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre><?php echo 'var_dump($db->errorInfo()) = ' . var_dump($db->errorInfo()); ?></pre>
    <br>
    <pre><?php echo '$statement = ' . var_dump($statement); ?></pre>
    <br>
    <h3>foreach mit fetchAll()</h3>
    <table>
        <thead>
        <tr>
        <th>Host</th><th>User</th>
        </tr>
        </thead>
        <tbody>    
            <?php foreach ($daten as $benutzer): ?>
                <tr style="text-decoration: underline">
                    <td><?= $benutzer['Host']; ?></td>
                    <td><?= $benutzer['User']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <br>
        <h3>var_dump() mit fetch()</h3>
        <pre><?php var_dump($daten_2) ?></pre>
             
    <br>
    <h3>while mit fetch()</h3>

    <table>
        <thead>
        <tr>
        <th>Host</th><th>User</th>
        </tr>
        </thead>
        <tbody>    
            <?php while ($benutzer3 = $statement_3->fetch()): ?>
                <tr style="text-decoration: underline">
                    <td><?= $benutzer3['Host']; ?></td>
                    <td><?= $benutzer3['User']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
