<?php

require_once 'inc/datenbank_2.inc.php';


$db->query('DROP TABLE IF EXISTS filme');

$db->query(
    'CREATE TABLE filme (
        id INT NOT NULL auto_increment PRIMARY KEY,
        titel VARCHAR(255),
        dauer INT(3),
        genre INT(3)
        ) default CHARSET = utf8'
);

$titel = "Star Treck V";
$dauer = 153;
$genre = 1;


$sql = 'INSERT INTO filme (titel, dauer, genre) VALUES ("' . $titel . '",' . $dauer . ',' . $genre . ');';

$db->query($sql);

$statement = $db->query('SELECT * FROM filme');
$daten = $statement->fetchAll();

echo var_dump($daten) . '<hr>';

// SQL Abfrage mit Prepared Statements:

// Statt der recht umständlichen o.a. Schreibweise mit Variablen, können diese Variablen als Array übergeben werden
// und im SQL-String dafür Platzhalter eingesetzt werden.

$db->query('DROP TABLE IF EXISTS personen');


$db->query(
    'CREATE TABLE personen (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nachname VARCHAR(50),
        vorname VARCHAR(50),
        geburtsjahr YEAR,
        geschlecht VARCHAR(1),
        strasse VARCHAR(100),
        plz INT(5),
        ort VARCHAR(100)
    ) DEFAULT CHARSET = utf8'
);

$personenDaten = [
    'Duck',
    'Dagobert',
    '1901',
    'm',
    'Am Geldspeicher 1',
    13579,
    'Entenhausen'
];

$sql_2 = 'INSERT INTO personen (nachname, vorname, geburtsjahr, geschlecht, strasse, plz, ort) VALUES (?,?,?,?,?,?,?)';

$statement_2 = $db->prepare($sql_2);
$statement_2-> execute($personenDaten);


$statement_3 = $db->query('SELECT * FROM personen');
$daten_2 = $statement_3->fetchAll();

echo var_dump($daten_2) . '<hr>';

$db->query('DROP TABLE IF EXISTS personen');


$db->query(
    'CREATE TABLE personen (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        nachname VARCHAR(50),
        vorname VARCHAR(50),
        geschlecht VARCHAR(1),
        ort VARCHAR(100)
    ) DEFAULT CHARSET = utf8'
);

$allePersonen = [
    [
    'Duck',
    'Dagobert',
    'm',
    'Entenhausen'
    ],
    [
    'Gans',
    'Gustav',
    'm',
    'Glücksstadt'
    ],    
    [
    'Maus',
    'Minnie',
    'f',
    'Entenhausen'
    ],    
    [
    'Duck',
    'Daisy',
    'f',
    'Entenhausen'
    ],    
    [
    'Duck',
    'Donald',
    'm',
    'Entenhausen'
    ],
];

$statement_4 = $db->prepare('INSERT INTO personen (nachname, vorname, geschlecht, ort) VALUES (?,?,?,?)');

for ($i = 0; $i < count($allePersonen); $i++) {
    foreach ($allePersonen[$i] as $einzelnePerson) {
        echo var_dump($einzelnePerson) . '<br>';
        // $statement_4-> execute([$einzelnePerson]);
    }
}



?>
