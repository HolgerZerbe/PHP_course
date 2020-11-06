<?php 
require_once 'fussball.php';


$holgersBall = new Fussball();

echo $holgersBall->beschreibeFussball();

echo '<hr>';

$ball = new Fussball();

$ball->setBesitzer('Bally');
$ball->setFarbe('weiß mit schwarzen Flecken');
$ball->setDurchmesser(30);

if ($ball instanceof Fussball) {
    echo $ball->beschreibeFussball();
} else {
    echo 'In $ball ist kein Fussball';
}

echo '<hr>';

$ball = 'Der String "Auch ich bin ein Fußball" ist ein String und keine Instanz von fussball!';

echo 'Nachdem das Objekt $ball mit einem String überschrieben wurde: <br>';

if ($ball instanceof Fussball) {
    echo $ball->beschreibeFussball();
} else {
    echo 'In $ball ist kein Fussball';
}

?>