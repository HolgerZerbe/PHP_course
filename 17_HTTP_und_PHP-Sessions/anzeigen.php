<?php

session_start();

$name = $_SESSION["name"] ?? null;

$name !== null ? null : $name = "lieber Gast";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>anzeigen.php</title>

    <h2>Willkommen</h2>

    <p>Hallo <?php echo $name ?>, wir heißen Sie hier recht herzlich willkommen!</p>

    <p><a href="eintragen.php">Zum Eintragen wechseln</a></p>
    <p><a href="loeschen.php">Zum Löschen wechseln</a></p>

</head>
<body>
    
</body>
</html>