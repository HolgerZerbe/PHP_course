<?php
session_start();

$_SESSION["nachricht"] = "Nachricht in Session auf Seite 1 gespeichert";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session_start</title>
</head>
<body>
    <h2>Seite 1 / session_start</h2>

    <p>Die Session wurde gestartet und eine Meldung gespeichert!</p>
    <p><a href="session_stop.php">Seite 2 aufrufen zum Stoppen der Session</a></p>
</body>
</html>