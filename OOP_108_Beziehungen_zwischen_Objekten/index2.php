<?php

require_once 'person2.php';
require_once 'adresse2.php';

$gustavGans = new Person2 (
    [
    'name' => 'Gustav Gans', 
    'email' => 'gustav.ganz@disney.com'
    ]
);

// $gustavGansAdresse = new Adresse2 ( 
//     [
//         'strasse' => 'Glücksweg',
//         'hausnummer' => 1,
//         'plz' => 99999,
//         'ort' => 'Entenhausen-Glücksburg'
//     ]
// );

echo $gustavGans;

echo '<hr>';

// echo $gustavGansAdresse;

$gustavGans->setAdresseStrasse('Pechvogelweg');
$gustavGans->setAdresseHausnummer(11);
$gustavGans->setAdressePlz(99999);
$gustavGans->setAdresseOrt('Entenhausen');



echo $gustavGans;


?>