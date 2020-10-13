<?php

$note = $_POST["benotung"] ?? "";
$note = $_POST["loeschen"] ?? $note;


switch($note) {
  case "1" :
    $bewertungsAusgabe = "sehr gut";
    break;
  case "2" :
    $bewertungsAusgabe = "gut";
    break;
  case "3" :
    $bewertungsAusgabe = "befriedigend";
    break;
  case "4" :
    $bewertungsAusgabe = "ausreichend";
    break;
  case "5" :
    $bewertungsAusgabe = "mangelhaft";
    break;
  case "6" :
    $bewertungsAusgabe = "ungenügend";
    break;  
  default : 
    $bewertungsAusgabe = "Keine gültige Eingabe";
    }

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bwertung.php</title>

    <form action="<?PHP echo $_SERVER['PHP_SELF']; ?> " method="post"> 

    <h3>Bitte geben Sie Ihre Bewertung ab:</h3>

    <input type="checkbox" name="benotung" id="benotung1" value="1">1 | 
    <input type="checkbox" name="benotung" id="benotung2" value="2">2 | 
    <input type="checkbox" name="benotung" id="benotung3" value="3">3 | 
    <input type="checkbox" name="benotung" id="benotung4" value="4">4 | 
    <input type="checkbox" name="benotung" id="benotung5" value="5">5 | 
    <input type="checkbox" name="benotung" id="benotung6" value="6">6 

    <br><br>

    <input type="submit" value="Absenden">
  
  </form>   

  <p>Ihre Bewertung: <?php echo $bewertungsAusgabe; ?></p>

  <br><br><hr><br><br>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">Löschen der Bewertung: 
  <input type="checkbox" name="loeschen" id="loeschenJa" value="j" checked>ja

  <br><br>

  <input type="submit" value="Absenden">
  </form>


</head>
<body>
    
</body>
</html>