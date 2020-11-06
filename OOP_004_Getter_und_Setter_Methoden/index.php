<?php

require_once 'einwohnerEntenhausen.php';

$micky = new EinwohnerEntenhausen();
echo $micky->getVerwandtMitOmaDuck() . '<br>';

echo '<hr>';

$micky->setEinwohner('Micky', 'Maus', 'Maus', false);

echo $micky->getVorname() . '<br>';
echo $micky->getNachname() . '<br>';
echo $micky->getTierart() . '<br>';
$micky->getVerwandtMitOmaDuck() ? $verwandt = $micky->getVorname() . ' ist mit Oma Duck verwandt.' : $verwandt = null;
echo $verwandt;
echo '<hr>';

$dagobert = new EinwohnerEntenhausen();
$dagobert->setEinwohner('Dagobert', 'Duck', 'Ente', false);
$minnie = new EinwohnerEntenhausen();
$minnie->setEinwohner('Minnie', 'Maus', 'Maus', true);
$gustav = new EinwohnerEntenhausen();
$gustav->setEinwohner('Gustav', 'Gans', 'Gans', true);
$goofy = new EinwohnerEntenhausen();
$goofy->setEinwohner('Goofy', null, 'Hund', false);

$allePersonen = [$dagobert, $minnie, $gustav, $goofy];

foreach ($allePersonen as $einzelnePerson) {
    echo $einzelnePerson->getVorname() . '<br>';
    echo $einzelnePerson->getNachname() . '<br>';
    echo $einzelnePerson->getTierart() . '<br>';
    $einzelnePerson->getVerwandtMitOmaDuck() ? $verwandt = $einzelnePerson->getVorname() . ' ist mit Oma Duck verwandt.' : $verwandt = 'Es besteht keine Verwandschaft mit Oma Duck';
    echo $verwandt;
    echo '<hr>';
}

$goofy->setNachname('Nachname nicht bekannt');

foreach ($allePersonen as $einzelnePerson) {
    echo $einzelnePerson->getVorname() . '<br>';
    echo $einzelnePerson->getNachname() . '<br>';
    echo $einzelnePerson->getTierart() . '<br>';
    $einzelnePerson->getVerwandtMitOmaDuck() ? $verwandt = $einzelnePerson->getVorname() . ' ist mit Oma Duck verwandt.' : $verwandt = 'Es besteht keine Verwandschaft mit Oma Duck';
    echo $verwandt;
    echo '<hr>';
}
?>
