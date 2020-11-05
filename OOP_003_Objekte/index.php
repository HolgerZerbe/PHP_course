<?php 
// Versuchen Sie für folgende Objekte geeignete Klassennamen zu finden:
// München, rot, Stuttgart, Ingwer, Hamburg, grün, Pfeffer, Katze, Berlin, gelb, Salami, Hund, Schinken, Kümmel.

require_once 'stadt.php';

$muenchen = new Stadt();
$hamburg = new Stadt();
$berlin = new Stadt();

$berlin->hauptstadt = true;
$berlin->name = 'BERLIN';

echo var_dump($muenchen) . '<br>';
echo var_dump($hamburg) . '<br>';
echo var_dump($berlin) . '<br>';

echo $berlin->besteStadtDerWelt();


;