<?php

$name = explode(",", "Zerbe, Holger");
$nachname = $name[0];
$vorname = trim($name[1]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05_übung_18</title>
</head>
<body>

   <p>Mit trim() kann von einem String der WhiteSpace am Anfang und am Ende gestrichen werden, <br>
   z.B. wenn ein Name in folgender Form "Nachname, Vorname" eingeben wurde und der Vor- und Nachname<br>
   werden sollen</p>

   <br><br>

   <p>Aus "Zerbe, Holger" wird nach explode und trim der Nachname = '<?php echo $nachname ?>' und der Vorname = '<?php echo $vorname ?>'  </p>

</body>
</html>