<?php

session_start();


if ($_POST  && trim($_POST["name"])!=="") {
    $_SESSION["name"] = ucfirst(trim($_POST["name"]));
} else 
    {
    $_SESSION["name"] = null;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eintragen.php</title>
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    
        <p>Bitte geben Sie Ihren Namen ein:</p>
        <input type="text" name="name" id="name" required>
        <input type="submit" value="Speichern">

        <br><br>
        <p>Ihr Eintrag: <?php echo $_SESSION["name"] ?></p>

        <p><a href="anzeigen.php">Zur Begrüßung wechseln</a></p>
        <p><a href="loeschen.php">Zum Löschen wechseln</a></p>
    
    
    </form>

</body>
</html>