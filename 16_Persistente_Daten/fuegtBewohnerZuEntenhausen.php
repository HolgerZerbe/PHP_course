<?php

// Dieses Script liest Daten aus dem File entenhausen.txt
// über das HTML-Formular hat der User die Möglichkeit, 
// einen neuen Bewohner Enthausens zu zufügen und im File 
// abzuspeichern
 
    $message=null;
if (!(empty($_POST))) {

    $bewohner = unserialize(file_get_contents("daten/entenhausen.txt"));
    $neuerBewohner = [
        "vorname" => $_POST["vorname"],
        "nachname" => $_POST["nachname"],
        "strasse" => $_POST["strasse"],
        "hausnummer" => $_POST["hausnummer"],
        "plz" => $_POST["plz"],
        "ort" => $_POST["ort"],
    ];
    $bewohner[] = $neuerBewohner;

    file_put_contents("daten/entenhausen.txt", serialize($bewohner));
        
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>fuegtBewohnerZuEntenhausen.php</title>
    <style>
        input{ display: block;
            margin: 20px 0 0 30px;
            width: 200px;
            font-size: 1.2em;}

    </style>
</head>
<body>
    
    <form action=<?php echo $_SERVER["PHP_SELF"] ?> method="post">
    
    <input type="text" name="vorname" id="vorname" placeholder="Vorname" required>
    <input type="text" name="nachname" id="nachname" placeholder="Nachname" required>
    <input type="text" name="strasse" id="strasse" placeholder="Strasse" required>
    <input type="text" name="hausnummer" id="hausnummer" placeholder="Hausnummer" required>
    <input type="text" name="plz" id="plz" placeholder="Postleitzahl" required>
    <input type="text" name="ort" id="ort" value="Entenhausen">
    
    <input type="submit" value="Person eintragen">

    <br><br>
    <p><?php 
    !(empty($_POST)) ? $message = "Danke, Person wurde hinzugefügt" : null;
            echo $message;
            unset($POST);
             ?> 
        </p>
    
    
    </form>



</body>
</html>