<?php

require_once 'kursteilnehmer.php';
require_once 'person.php';
require_once 'fussball.php';


$ich = new kursteilnehmer('Holger', 'Holgerson', '1919-05-02', 'HTML, CSS, PHP, Vue.js');
$robert = new kursteilnehmer('Robert', 'Robertson', '1978-09-30', ['JavaScript', 'PHP', 'Vue.js']);
$sarah = new kursteilnehmer('Sarah', 'Sarandon', '2001-11-08', 25);

echo $ich->getTeilnehmer();
echo '<hr>';
echo $robert->getTeilnehmer();
echo '<hr>';
echo $sarah->getTeilnehmer();
echo '<hr>';


$ichAuch = new Person (
    ['vorname' => 'Holger',
    'nachname' => 'Holgerson']
);

echo $ichAuch;

echo '<hr>';

require_once 'fussball.php';


// $beckenbauer = new Fussball('Franz', 'bunt', 25, 'Plastik');
$beckenbauer = new Fussball(
    [
    'besitzer' => 'Franz',
    'farbe' =>  'bunt',
    'durchmesser' => 25,
    'material' => 'Plastik']
);
// echo $beckenbauer->beschreibeFussball();
echo $beckenbauer;


?>
