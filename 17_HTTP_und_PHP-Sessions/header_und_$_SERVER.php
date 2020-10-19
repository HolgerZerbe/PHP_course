<?php echo '<h3>$_SERVER</h3>'; ?>

<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>$_SERVER</title>
</head>

<body>
    <pre><?php var_dump($_SERVER); ?></pre>
    <p>Viele HTTP-Request-Header, welche vom Browser gesendet werden,<br>
    findet man in der PHP-Variablen $_SERVER! </p>
</body>

</html>

-->


<?php
[$bevorzugteSprache,] = explode(
    ',',
    $_SERVER['HTTP_ACCEPT_LANGUAGE'],
    //   ["HTTP_ACCEPT_LANGUAGE"]=>
    //    string(35) "de-DE,de;q=0.9,en-US;q=0.8,en;q=0.7"

    2
);

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>$_SERVER</title>
</head>

<body>
    <?php strpos($bevorzugteSprache, 'de') !== false ? $welcome = "Willkommen auf unserer tollen Seite." : $welcome ="Welcome to our great homepage." ?>

    <p><?php echo $welcome ?></p>

   
    <?php echo "<h3>header()</h3>" ?>

    
    <?php

    $timestamp = mktime();
    $newGMT = gmstrftime("%b %d %Y %H:%M:%S",$timestamp);
    echo $newGMT . "<br>";
    $timestamp -=5;
    
    $newGMT = gmstrftime("%b %d %Y %H:%M:%S",$timestamp);
    echo $newGMT;

    // In diesem Fall ist der Inhalt seit 5 Sekunden abgelaufen. Der Browser würde somit angewiesen, dass Dokument jedes Mal neu anzufordern.

    header("Expires: $newGMT");

    ?>

    <?php

    // header("Location: https://holgerzerbe.github.io/portfolio/"); // Browser umleiten
    // exit;

    ?>
    <h3>exit</h3>
    <p>exit: Dieses Sprachkonstrukt bewirkt den sofortigen Abbruch des PHP-Skripts, egal, was danach noch steht (ohne Funktionsklammer).</p>
</body>

</html>