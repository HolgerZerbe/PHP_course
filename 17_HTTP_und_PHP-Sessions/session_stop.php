<?php
session_start();

$nachricht =$_SESSION["nachricht"] ?? "";

unset($_SESSION["nachricht"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>session_start</title>
</head>
<body>
    <h2>Seite 2 / session_stop</h2>

    <p>Die Session wurde gestartet und eine Meldung ausgelesen!</p>
    <p>Die Meldung wurde danach aus der Session gelöscht.</p>
    <p>Da sie jedoch vorher in einer Variablen abgelegt wurde,</p>
    <p>ist sie weiterhin für den aktuellen Skriptdurchlauf verfügba</p>
    <p>Sie lautet: &quot;<?php echo $nachricht; ?>&quot;</p>
    <p>Nach dem Browser Reload wird jedoch keine Meldung mehr gefunden.</p>
    <p><a href="session_start.php">Seite 1 aufrufen</a></p>
</body>
</html>