<?php

require_once 'person.php';

$unbekanntePerson = new Person();

$unbekanntePerson->setVorname('John');
$unbekanntePerson->setNachname('Doe');
$unbekanntePerson->setGeburtTimestamp(time());

echo var_dump($unbekanntePerson);

echo '<hr>';

echo 'Die Person heißt ' . $unbekanntePerson->getVorname() . " " . $unbekanntePerson->getNachname() . ".";

echo '<hr>';

echo 'Der Wert des virtuellen Attributs $name lautet: ' . $unbekanntePerson->getName() . '<br>';

echo 'und ihr Geburtstag ist der '. $unbekanntePerson->getGeburtstag();

echo '<hr>';

$hansMeiser = new Person();
$hansMeiser->setName('Hans Meiser');
$hansMeiser->setGeburtstag('1931-07-31');

echo $hansMeiser->getName() . '<br>';
echo 'hat Geburtstag am: '. $hansMeiser->getGeburtstag();

echo '<hr>';




?>