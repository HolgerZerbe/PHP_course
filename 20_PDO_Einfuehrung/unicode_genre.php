<?php

require_once 'inc/datenbank.inc.php';


$db->query(
    'CREATE TABLE genre (
        id INT NOT NULL auto_increment PRIMARY KEY,
        titel VARCHAR(255)
        ) default CHARSET = utf8'
);


$db->query('INSERT INTO genre (titel) VALUES ("Rocky V")');

$statement = $db->query('SELECT * FROM genre');
$daten = $statement->fetchAll();

echo var_dump($daten);

$db->query('DROP TABLE genre');

?>
