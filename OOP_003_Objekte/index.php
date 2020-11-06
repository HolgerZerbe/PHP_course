<?php 
// Versuchen Sie für folgende Objekte geeignete Klassennamen zu finden:
// München, rot, Stuttgart, Ingwer, Hamburg, grün, Pfeffer, Katze, Berlin, gelb, Salami, Hund, Schinken, Kümmel.

require_once 'stadt.php';
require_once 'kanne.php';

$muenchen = new Stadt();
$hamburg = new Stadt();
$berlin = new Stadt();

$berlin->hauptstadt = true;
$berlin->name = 'BERLIN';

echo var_dump($muenchen) . '<br>';
echo var_dump($hamburg) . '<br>';
echo var_dump($berlin) . '<br>';

echo $berlin->besteStadtDerWelt() . '<br><br>';

$holgers_kanne = new Kanne ();
$holgers_kanne->art="thermos";
$holgers_kanne->getraenk="kaffee";
$holgers_kanne->inhalt_in_liter= 1;
$holgers_kanne->gefüllt= true;

echo 'object $holgers_kanne nach dem Konstruieren und dem Einsetzen von Werten: <br>';
echo var_dump($holgers_kanne);

echo '<hr>';

$holgers_kanne->leereKanne();

echo 'object $holgers_kanne nach dem Ausführen der Methode leereKanne(): <br>';

echo var_dump($holgers_kanne);

