<?php

$optionen = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true, 
];

$db = new PDO (
    'mysql:host=localhost; dbname=lecture_22; port=3308',
    'root',
    '',
    $optionen
);
