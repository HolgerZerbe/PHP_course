<?php

if ((!(empty($_GET))) && isset($_GET["monat"]) && isset($_GET["tag"]) && isset($_GET["jahr"]))  {
    $timestamp = mktime(0,0,0,$_GET["monat"], $_GET["tag"], $_GET["jahr"]);

    $jetzt = time();

    $alter = intval(($jetzt-$timestamp)/60/60/24/365);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>geburtstag.php</title>
</head>
<body>
    
    <h3>Geben Sie Ihren Geburtstag ein:</h3>

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label for="tag">Tag der Geburt:</label>
        <input type ="number" name="tag" min=1 max=31>
        <label for="monat">Monat der Geburt:</label>
        <input type ="number" name="monat" min=1 max=12>
        <label for="jahr">Jahr der Geburt:</label>
        <input type ="number" name="jahr" min=1900 max=2020>

        <br><br>

        <input type="submit" value="Ermitteln des Timestamps">

    </form>
    
    <br><br>

    <?php 
        if (!(empty($_GET))) {
      ?>
        <p>Ihr timestamp bei der Geburt (0:00 Uhr): <?php echo $timestamp ?></p>
        <p>Sie sind jetzt <?php echo $alter ?> Jahre alt.</p>
        <br>
    <?php 
        }
    ?>

    
</body>
</html>