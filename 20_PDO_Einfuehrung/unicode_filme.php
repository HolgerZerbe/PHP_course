<?php

require_once 'inc/datenbank.inc.php';


$db->query(
    'CREATE TABLE filme (
        id INT NOT NULL auto_increment PRIMARY KEY,
        titel VARCHAR(255),
        veroeffentlichung date,
        dauer INT(5)
        ) default CHARSET = utf8'
);


$db->query('INSERT INTO filme (titel, veroeffentlichung, dauer) VALUES ("Rambo", "1978-05-30", 178)');

$statement = $db->query('SELECT * FROM filme');
$daten = $statement->fetchAll();

echo var_dump($daten);

$db->query('DROP TABLE filme');

?>
