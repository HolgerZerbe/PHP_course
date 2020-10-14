<?php

// phpinfo();

$zahl = 152;
$vorname = "Holger";
$nachname = "Zerbe";

var_dump($zahl);
var_dump($vorname);
var_dump($nachname);
var_dump($vorname." ".$nachname);
var_dump($vorname, $nachname, 51);

$upperCompleteName = strtoupper($vorname." ".$nachname);

$kenntnisse = "Meine Skills sind HTML, CSS, JavaScript, React, Node und MongoDB";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05_funktionen</title>
</head>
<body>
    <br />
    <?php echo $upperCompleteName ?>
    <p>Mongo steht an Stelle <?php echo strpos($kenntnisse, "Mongo") ?></p>
</body>
</html>