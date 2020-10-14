<?php

$skills[] = "HTML"; // initialisiert Array (wenn nicht vorhanden) und 
                    // fügt Item dazu mit der nächst freien Index-Nummer nach dem letzen Item zu
                    // Achtung:
                    // Ist der Variablen-Name bereits für einen skalaren Datentypen verwendet worden
                    // und es wird versucht ein Item zu zufügen, dann gibt es einen PHP-Fehler

$skills[2] = "CSS"; // Wenn nicht vorhanden: Fügt Item mit der Index-Nummer 2 hinzu
                    // Wenn vorhanden, wird der Wert des Items mit der index-Nummer 2 überschrieben

$learningAtTheMoment = array("PHP", "Vue.js"); // initialisiert Array und weist zwei Werte zu

$skills = array("JavaScript", "React");  // der bestehende Array Skills wird hier neu initialisiert 
                                         // und zwei Werte zugewiesen
                                        
$skills = ["MySQL", "mongoDB"];  // seit PHP5.4 neue Zuweisungsform von Arrays, funktioniert wie $skills = array(...)

$max["vorname"] = "Max"; // Initialisierung des Assoziativen Arrays Max, dem Key "vorname" wird er Wert "Max" zugewiesen 
$max["nachname"] = "Mustermann"; // Im  Assoziativen Array Max wird der neue Key "nachname" angelegt und ihm wird der Wert "Mustermann zugewiesen
$max["alter"] = 22;
$max["faecher"] = ["HTML", "CSS", "JavaScript"]; // als Werte können auch Arrays übergeben werden (verschachteltes Array)

// Initialisierung des Arrays "Julia" und Übergeben von 4 Keys mit den dazugehörigen Werten: 
$julia = [
    "vorname" => "Julia",
    "nachname" => "Jetzt",
    "alter" => 37,
    "faecher" => ["HTML", "CSS", "JavaScript", "Node", "PHP", "React", "Angular"],
];


$zahlen = [
    1, "2", "3", 4 , "5", 6 , "7", 8 , 9 , 10, "11", 12,
];
$zahlen[] = "13";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07_lectures-eigen</title>
</head>
<body>
    <h4>Arrays</h4>
    <p><b>Arrays sind Datencontainer, welche mehrere Werte aufnehmen können (im Gegensatz zu einer Variablen). Diese Daten werden unter Index-Nummer gespreichert</b></p>
    <p>$skills[] = "HTML"; // initialisiert Array (wenn nicht vorhanden) und  fügt Item dazu mit der nächst freien Index-Nummer nach dem letzen Item zu</p>
    <p>                    // Achtung: Ist der Variablen-Name bereits für einen skalaren Datentypen verwendet worden und es wird versucht ein Item zu zufügen, dann gibt es einen PHP-Fehler</p>         
    <p>$skills[2] = "CSS"; // Wenn nicht vorhanden: Fügt Item mit der Index-Nummer 2 hinzu. Wenn vorhanden, wird der Wert des Items mit der index-Nummer 2 überschrieben</p> 
    <p>$learningAtTheMoment = array("PHP", "Vue.js"); // initialisiert Array und weist zwei Werte zu</p> 
    <p>$skills = array("JavaScript", "React");  // der bestehende Array Skills wird hier neu initialisiert und zwei Werte zugewiesen</p>                                   
    <p>$skills = ["MySQL", "mongoDB"]  // seit PHP5.4 neue Zuweisungsform von Arrays, funktioniert wie $skills = array(...)</p>
    <br><hr><br>

    <p>Auslesen eines Arrays mit echos $skills: <?php echo $skills; ?></p>  
    <!-- ergibt folgende Meldung:
    Notice: Array to string conversion in /home/hzerbe/Schreibtisch/phpschulung/07_lektionen07/eigen.php on line 24
    Array
    -->
    <p>Auslesen des Items Index 0 eines Arrays mit echos $skills[0]: <?php echo $skills[0]; ?></p>  

    <p>Auslesen eines nicht vorhandenen Items Index 5 eines Arrays mit echos $skills[5]: <?php echo $skills[5]; ?></p>
    <!-- ergibt folgende Meldung:  
    Notice: Undefined offset: 5 in /home/hzerbe/Schreibtisch/phpschulung/07_lektionen07/eigen.php on line 33
    -->
    <p>Anzeigen des ganzen Arrays mit var_dump($skills): <?php echo var_dump($skills); ?></p>
    <br><hr><br>

    <h4>Assoziative Arrays</h4> 
    <p><b>Assoziative Arrays sind Arrays, in denen die Werte einem key(Schlüssel) zugeordent wird, dieser key(Schüssel ist ein String)</b></p>
    <br>
    <p>$max["vorname"] = "Max"; // Initialisierung des Assoziativen Arrays Max, dem Key "vorname" wird er Wert "Max" zugewiesen</p>
    <p>$max["nachname"] = "Mustermann"; // Im  Assoziativen Array Max wird der neue Key "nachname" angelegt und ihm wird der Wert "Mustermann zugewiesen</p>
    <p>$max["alter"] = "22";</p>
    <p>$max["faecher"] = ["HTML", "CSS", "JavaScript"]; // als Werte können auch Arrays übergeben werden (verschachteltes Array)</p>
    <br>
    <p>Anzeigen des Wertes des Keys "nachname" mit var_dump($max["nachname"]): <?php echo var_dump($max["nachname"]); ?></p>
    <p>Anzeigen des ganzen Arrays mit var_dump($max): <?php echo var_dump($max); ?></p>
    <p>Anzeigen des ganzen, formatierten Arrays mit &lt;pre&gt; &lt;/pre&gt; um den PHP-Befehl var_dump($max): <pre><?php echo var_dump($max); ?></pre></p>

    <p>Anzeigen eines verschachtelten Array-Wertes mit echo $max["faecher"][1]: <?php echo $max["faecher"][1]; ?></p>
    <br>
    <p><b>Der Doppelpfeiloperator</b></p>
    <p>Mittels Doppelpfeil-Operator kann ein Assoziatives Array schnell erstellt werden, da mehrere Keys mit ihren Werten gleichzeitig in den Array geschrieben werden können.</p>

    // Initialisierung des Arrays "Julia" und Übergeben von 4 Keys mit den dazugehörigen Werten: 
<p>$julia = [</p> 
<p>   "vorname" => "Julia",</p> 
<p>   "nachname" => "Jetzt",</p> 
<p>    "alter" => 37,</p> 
<p>   "faecher" => ["HTML", "CSS", "JavaScript", "Node", "PHP", "React", "Angular"],</p> 

<br><hr><br>

<h4>Array-Funktionen</h4>

<p><b>is_array()</b></p>

<p>Mit is_array() wird überprüft, ob es sich um den Datentypen Array handelt, der Rückgabewert ist true oder false.</p>

<p>Ausgabe von is_array($julia) ergibt wahr: <?php echo is_array($julia); ?> </p>
<br>

<p><b>count()</b></p>

<p>Mit count() wird die Anzahl der Items in einem Array ermittelt</p>

<p>Ausgabe von count($julia) ergibt: <?php echo count($julia); ?> </p>
<br>

<p><b>in_array()</b></p>

<p>mit in_array() kann überprüft werden, ob ein gewisser Wert in einem Array vorkommt. Die Funktion erwartet zwei Parameter, als erstes den zu suchenden Wert und als zweites das zu durchsuchende Array. Als dritter Parameter kann optional ein boolean gesetzt, der überprüft ob der skalare Datentyp übereinstimmt</p>

<p>Ausgabe von in_array("Mustermann", $max) = wahr: <?php echo in_array("Mustermann", $max); ?></p>
<p>Ausgabe von in_array(11, $zahlen) = true / nur Überprüfung des Wertes ohne Datentyp (hier ist "11" gleich 11): <?php echo in_array(11, $zahlen); ?></p>
<p>Ausgabe von in_array(11, $zahlen, true) = false / Überprüfung des Wertes und des Datentyp (hier ist der String "11" ungleich der Zahl 11): <?php echo in_array(11, $zahlen, true); ?></p>
<br>

<p><b>array_keys()</b></p>

<p>Mit array_keys() werden die keys in einem Array ausgelesen, der Rückgabewert ist ein Array im den Keys als Items.</p>

<?php $keys = array_keys($max); ?>
<p>Ausgabe von array_keys($max): <?php echo var_dump($keys); ?></p>

<br>

<p><b>array_pop()</b></p>

<p>Mit array_pop() wird das letzte Item eines Arrays gelöscht. Es ist besser, vorher eine Kopie des Arrays mit array_keys zu erstellen, und dieses zu poppen, damit der ursprüngliche Array erhalten bleibt:<p>

<p>Array $zahlen <b>vor</b> array_pop($zahlen): </p><?php echo var_dump($zahlen); ?>
<?php array_pop($zahlen) ?>
<br>
<p>Array $zahlen <b>nach</b> array_pop($zahlen): </p><?php echo var_dump($zahlen); ?>
<br><br>

<p><b>array_shift()</b></p>

<p>Äquivalent zu array_pop, nur wird hier das erste Items eines Arrays gelöscht:</p>

<p>Array $max <b>vor</b> array_shift($max): </p><?php echo var_dump($max); ?>
<?php array_shift($max) ?>
<br>
<p>Array $max <b>nach</b> array_shift($max): </p><?php echo var_dump($max); ?>
<br>



</body>
</html>


