<?php
$test1 = "Hallo";
$test2 = 45 * 3.7;
$test3 = 7 . 5;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>06_lektionen_Übung21/23/24/26</title>
</head>
<body>
    <p>Der Wert der Variable $test1 ist <?php echo $test1 ?> und dieser hat den Datentyp <?php echo ucfirst(gettype($test1)) ?>.</p>
    <p>Der Wert der Variable $test2 ist <?php echo $test2 ?> und dieser hat den Datentyp <?php echo ucfirst(gettype($test2)) ?>.</p>
    <p>Der Wert der Variable $test3 ist <?php echo $test3 ?> und dieser hat den Datentyp <?php echo ucfirst(gettype($test3)) ?>.</p>
    <br><br>
    <p>alternativ:</p>
    <br><br>
    <p>Der Wert der Variable $test1 ist <?php echo var_dump($test1) ?> und dieser hat den Datentyp <?php echo ucfirst(gettype($test1)) ?>.</p>
    <p>Der Wert der Variable $test2 ist <?php echo var_dump($test2) ?> und dieser hat den Datentyp <?php echo ucfirst(gettype($test2)) ?>.</p>
    <p>Der Wert der Variable $test3 ist <?php echo var_dump($test3) ?> und dieser hat den Datentyp <?php echo ucfirst(gettype($test3)) ?>.</p>
</body>
</html>