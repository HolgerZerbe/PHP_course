<?php

$ergebnis = explode("/", "Apfel/Birne/Ananas/Kirsche");
$ergebnis2 = explode("/", "Apfel/Birne/Ananas/Kirsche", 3);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05_übung_17</title>
</head>
<body>

   <p>Mit explode() kann ein String gesplittert werden, die Funktion kann drei Parameter haben<br>
   der erste Parameter ist der String, welcher als Separator dient<br>
   der zweite Parameter ist der zu teilende String<br>
   der dritte Parameter ist die Anzahl der maximal im Array als Ergebnisse zu speichernde Teile. Der dritte Parameter ist optional</p>

   <br><br>

   <p>explode(",", "Apfel,Birne,Ananas,Kirsche") ergibt [<?php echo $ergebnis[0] ?>, <?php echo $ergebnis[1] ?>, <?php echo $ergebnis[2] ?>, <?php echo $ergebnis[3] ?>] </p>
   <p>explode(",", "Apfel,Birne,Ananas,Kirsche") ergibt [<?php echo $ergebnis2[0] ?>, <?php echo $ergebnis2[1] ?>, <?php echo $ergebnis2[2] ?>]</p>

</body>
</html>