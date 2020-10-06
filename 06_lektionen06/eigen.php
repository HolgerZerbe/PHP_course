<?php

$zahl = 642;
$string = "Das ist ein String";
$null = null;
$boolean = true;
$array = [0, 1, 2, 3];

$testVariable1 = "ilugflirqeogfiu";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 06 - Eigen</title>
</head>
<body>

    Die Funktion gettype() returned um welchen Datentypen es sich handel

    <p>Bei der Variablen $zahl handelt es sich um den Typen <?php echo gettype($zahl) ?></p>
    <p>Bei der Variablen $string handelt es sich um den Typen <?php echo gettype($string) ?></p>
    <p>Bei der Variablen $null handelt es sich um den Typen <?php echo gettype($null) ?></p>
    <p>Bei der Variablen $boolean handelt es sich um den Typen <?php echo gettype($boolean) ?></p>
    <p>Bei der Variablen $array handelt es sich um den Typen <?php echo gettype($array) ?></p>
    <br><hr><br>
    <p>Gibt es $testVariable1? <?php echo isset($testVariable1) ?></p>
    <p>Gibt es $testVariable2? <?php echo isset($testVariable2) ?></p>

</body>
</html>