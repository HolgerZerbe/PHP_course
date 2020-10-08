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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>07_lecutures-eigen</title>
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

    <p>Auslesen eines Arrays mit echos $skills: <?php echo $skills ?></p>  
    <!-- ergibt folgende Meldung:
    Notice: Array to string conversion in /home/hzerbe/Schreibtisch/phpschulung/07_lektionen07/eigen.php on line 24
    Array
    -->
    <p>Auslesen des Items Index 0 eines Arrays mit echos $skills[0]: <?php echo $skills[0] ?></p>  

    <p>Auslesen eines nicht vorhandenen Items Index 5 eines Arrays mit echos $skills[5]: <?php echo $skills[5] ?></p>
    <!-- ergibt folgende Meldung:  
    Notice: Undefined offset: 5 in /home/hzerbe/Schreibtisch/phpschulung/07_lektionen07/eigen.php on line 33
    -->
    <p>Anzeigen des ganzen Arrays mit var_dump($skills): <?php echo var_dump($skills) ?></p>
    <br><hr><br>

    <h4>Assoziative Arrays</h4> 
    <p><b>Assoziative Arrays sind Arrays, in denen die Werte einem key(Schlüssel) zugeordent wird, dieser key(Schküssel ist ein String)</b></p>
    <br>
    <p>$max["vorname"] = "Max"; // Initialisierung des Assoziativen Arrays Max, dem Key "vorname" wird er Wert "Max" zugewiesen</p>
    <p>$max["nachname"] = "Mustermann"; // Im  Assoziativen Array Max wird der neue Key "nachname" angelegt und ihm wird der Wert "Mustermann zugewiesen</p>
    <p>$max["alter"] = "22";</p>
    <p>$max["faecher"] = ["HTML", "CSS", "JavaScript"];</p>
    <br>
    <p>Anzeigen des Wertes des Keys "nachname" mit var_dump($max["nachname"]): <?php echo var_dump($max["nachname"]) ?></p>
    <p>Anzeigen des ganzen Arrays mit var_dump($max): <?php echo var_dump($max) ?></p>
    <p>Anzeigen des ganzen, formatierten Arrays mit &lt;pre&gt; &lt;/pre&gt; um den PHP-Befehl var_dump($max): <pre><?php echo var_dump($max) ?></pre></p>
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

<h5>Array-Funktionen</h5>

<p>is_array()</p>

<p>Mit is_array() wird überprüft, ob es sich um den Datentypen Array handelt, der Rückgabewert ist true oder false.</p>

<p></p>


</body>
</html>


