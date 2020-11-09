<?php

require_once 'kursteilnehmer.php';


$ich = new kursteilnehmer('Holger', 'Holgerson', '1919-05-02', 'HTML, CSS, PHP, Vue.js');
$robert = new kursteilnehmer('Robert', 'Robertson', '1978-09-30', ['JavaScript', 'PHP', 'Vue.js']);
$sarah = new kursteilnehmer('Sarah', 'Sarandon', '2001-11-08', 25);

echo $ich->getTeilnehmer();
echo '<hr>';
echo $robert->getTeilnehmer();
echo '<hr>';
echo $sarah->getTeilnehmer();

?>
