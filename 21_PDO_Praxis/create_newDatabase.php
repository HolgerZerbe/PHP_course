<?php

require_once 'inc/datenbank.inc.php';


$db->query(
    'DROP DATABASE IF EXISTS seminarverwaltung;
     CREATE DATABASE hausverwaltung;
    USE hausverwaltung;'

);

?>