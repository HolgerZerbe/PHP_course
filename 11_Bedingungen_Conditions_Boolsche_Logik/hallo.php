<!-- <?php 

if ((isset($_POST["vorname"]) && !(empty($_POST["vorname"]))) && (isset($_POST["nachname"]) && !(empty($_POST["nachname"])))) {
  $ausgabe = "Hallo " . ucfirst($_POST["vorname"]) . " " . ucfirst($_POST["nachname"]) . ". Schön, dass Sie wieder da sind.";
} else {
  $ausgabe = "Wer sind sie?";
}

?> -->

<?php 

if ((isset($_POST["vorname"]) && !(empty(trim($_POST["vorname"])))) && (isset($_POST["nachname"]) && !(empty(trim($_POST["nachname"]))))) {
  $ausgabe = "Hallo " . ucfirst($_POST["vorname"]) . " " . ucfirst($_POST["nachname"]) . ". Schön, dass Sie wieder da sind.";
} elseif ((!(isset($_POST["vorname"])) || (empty(trim($_POST["vorname"])))) && (!(isset($_POST["nachname"])) || (empty(trim($_POST["nachname"]))))) {
  $ausgabe = "Vor- und Nachname fehlt!";
} elseif (!(isset($_POST["nachname"])) || (empty(trim($_POST["nachname"])))) {
  $ausgabe = "Nachname fehlt!";
} else {
  $ausgabe = "Vorname fehlt!";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hallo.php</title>

    <form action="<?PHP echo $_SERVER['PHP_SELF']; ?> " method="post"> 


    <input type="text" name="vorname" id="vorname" placeholder="Vorname">
    <input type="text" name="nachname" id="nachname" placeholder="Nachname">  

    <input type="submit" value="Absenden">
  
  </form>   

  <p><?php echo $ausgabe ?></p>
</head>
<body>
    
</body>
</html>