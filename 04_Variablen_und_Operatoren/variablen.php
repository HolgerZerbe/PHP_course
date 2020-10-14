<?php

$vorname = "Holger";
$nachname = "Zerbe";
$alter = 51;

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lektionen04_variablen</title>
</head>
<body>
    <h1>That's me!</h1>

    <h3>Mein Name ist <?php echo $vorname." ".$nachname ?> und ich bin <?php echo $alter ?> Jahre alt!</h3>
</body>
</html>