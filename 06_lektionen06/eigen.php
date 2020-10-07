<?php

$zahl = 642;
$string = "Das ist ein String";
$null = null;
$boolean = true;
$array = [0, 1, 2, 3];

$testVariable1 = "ilugflirqeogfiu";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 06 - Eigen</title>
</head>
<body>

    Die Funktion gettype() returned um welchen Datentypen es sich handel

    <p>Bei der Variablen $zahl handelt es sich um den Typen <?php echo gettype($zahl); ?></p>
    <p>Bei der Variablen $string handelt es sich um den Typen <?php echo gettype($string); ?></p>
    <p>Bei der Variablen $null handelt es sich um den Typen <?php echo gettype($null); ?></p>
    <p>Bei der Variablen $boolean handelt es sich um den Typen <?php echo gettype($boolean); ?></p>
    <p>Bei der Variablen $array handelt es sich um den Typen <?php echo gettype($array); ?></p>
    <br><hr><br>

    Das Sprachkonstrukt (keine Funktion) isset() überprüft, ob eine Variable vorhanden ist. Bei true wird "1" ausgegeben, bei false erfolgt keine Ausgabe.
    <p>Gibt es $testVariable1? <?php echo isset($testVariable1); ?> Der Inhalt wird mit var_dump() angezeigt: <?php echo var_dump($testVariable1); ?></p>
    <p>Gibt es $testVariable2? <?php echo isset($testVariable2); ?></p>
    <br><hr><br>

    Das Sprachkonstrukt unset() löscht eine vorher definierte Variable
    <p>Die $testVariable1 <b>vor dem Löschen</b> überprüft mit isset(): <?php echo isset($testVariable1); ?></p>
    <?php unset($testVariable1); ?>
    <p>Die $testVariable1 <b>nach dem Löschen</b> überprüft mit isset(): <?php echo isset($testVariable1); ?></p>
    <br><hr><br>

    Das Sprachkonstrukt empty() überprüft, ob Variablen oder die Rückgabewerte einer Funktion <b>leer</b> sind, der Rückgabewert ist true oder false<br>

    <?php 
    $nichts = null;
    $string1 = "Hallo World";
    $string2 = "";
    $string3 = "0";
    $boolean1 = true;
    $boolean2 = false;
    $integer1 = 0;
    $integer2 = 1;
    $integer3 = -1;

    ?>

    Gegeben sind folgende Variablen:<br>
    $nichts = null;<br>
    $string1 = "Hallo World";<br>
    $string2 = "";<br>
    $string3 = "0";<br>
    $boolean1 = true;<br>
    $boolean2 = false;<br>
    $integer1 = 0;<br>
    $integer2 = 1;<br>
    $integer3 = -1;<br><br>

    isset() gegen empty()<br><br>

    Eine Variable, die nicht existiert, erzeugt bei isset($garnichts) false: <?php echo isset($garnichts); ?><br>
    Eine Variable, die nicht existiert, erzeugt bei empty($garnichts) true: <?php echo empty($garnichts); ?><br>
    <br>
    Eine Variable, die null (nicht die Zahl 0) enthält, erzeugt bei isset($nichts) false: <?php echo isset($nichts); ?><br>
    Eine Variable, die null (nicht die Zahl 0) enthält, erzeugt bei empty($nichts) true: <?php echo empty($nichts); ?><br>
    <br>
    Eine Variable, die einen String enthält, erzeugt bei isset($string1) true: <?php echo isset($string1); ?><br>
    Eine Variable, die einen String enthält, erzeugt bei empty($string1) false: <?php echo empty($string1); ?><br>
    <br>    
    Eine Variable, die einen leeren String enthält, erzeugt bei isset($string2) true: <?php echo isset($string2); ?><br>
    Eine Variable, die einen leeren String enthält, erzeugt bei empty($string2) true: <?php echo empty($string2); ?><br>
    <br>    
    Eine Variable, die den String "0" enthält, erzeugt bei isset($string3) true: <?php echo isset($string3); ?><br>
    Eine Variable, die den String "0" enthält, erzeugt bei empty($string3) true: <?php echo empty($string3); ?><br>
    <br>
    Eine Variable, die den boolschen Wert true enthält, erzeugt bei isset($boolean1) true: <?php echo isset($boolean1); ?><br>
    Eine Variable, die den boolschen Wert true enthält, erzeugt bei empty($boolean1) false: <?php echo empty($boolean1); ?><br>
    <br>
    Eine Variable, die den boolschen Wert false enthält, erzeugt bei isset($boolean2) true: <?php echo isset($boolean2); ?><br>
    Eine Variable, die den boolschen Wert false enthält, erzeugt bei empty($boolean2) true: <?php echo empty($boolean2); ?><br>
    <br>
    Eine Variable, die die Zahl 0 enthält, erzeugt bei isset($integer1) true: <?php echo isset($integer1); ?><br>
    Eine Variable, die die Zahl 0 enthält, erzeugt bei empty($integer1) true: <?php echo empty($integer1); ?><br>
    <br>
    Eine Variable, die die Zahl 1 enthält, erzeugt bei isset($integer2) true: <?php echo isset($integer2); ?><br>
    Eine Variable, die die Zahl 1 enthält, erzeugt bei empty($integer2) false: <?php echo empty($integer2); ?><br>
    <br>
    Eine Variable, die die Zahl -1 enthält, erzeugt bei isset($integer3) true: <?php echo isset($integer3); ?><br>
    Eine Variable, die die Zahl -1 enthält, erzeugt bei empty($integer3) false: <?php echo empty($integer3); ?><br>
    <br>
    <br><hr><br>
    empty() bei Funktionen<br><br>

    <?php
    $heuhaufen = "Hallo";
    ?>
    Gegeben ist die Variable $heuhaufen, es soll der empty() auf den Rückgabewert von strpos() angewendet werden.<br>

    Die Kombination von empty() und strpos() ist problematisch, da die Position des Anfangsbuchstaben 0 ist, somit wird empty() wahr.<br><br>

    Keine Position von "X" im String der Variablen $heuhaufen: <?php echo strpos($heuhaufen, "X"); ?>  ,daher wird empty() wahr: </em><?php echo empty(strpos($heuhaufen, "X")); ?><br> 
    Position: <?php echo strpos($heuhaufen, "H"); ?> im String der Variablen $heuhaufen, daher wird empty() wahr: <?php echo empty(strpos($heuhaufen, "H")); ?><br> 
    Position: <?php echo strpos($heuhaufen, "l"); ?> im String der Variablen $heuhaufen, daher wird empty() false: <?php echo empty(strpos($heuhaufen, "l")); ?><br> 
    <br>
    <br><hr><br>

    Integer / is_int()
    <br><br>
    Integer sind Ganzzahlen, bei 32-Bit Systemen ist die größte Integer 2147483647, die kleinste -2147483647.
    Zahlen die größer oder kleiner sind werden bei PHP in double umgewandelt, d.h. in eine Fließkommazahl.
    <br><br>
    is_int() überprüft, ob es sich um eine Ganzzahl handelt, der Rückgabewert is true (bei einer Ganzzahl) oder false (bei einer Kommazahl).<br>

    <?php 
    $zahl1 = 4;
    $zahl2 = 4.5;
    $string = "5";
    ?>

    Gegeben sind folgende Variablen:<br>
    $zahl1 = 4;<br>
    $zahl2 = 4.5;<br>
    $string = "5";<br><br>

    Eine Variable, die eine Ganzzahl enthält, erzeugt bei is_int($zahl1) true: <?php echo is_int($zahl1); ?><br>
    Eine Variable, die eine Fließkommazahl enthält, erzeugt bei is_int($zahl2) false: <?php echo is_int($zahl2); ?><br>
    Eine Variable, die einen String (auch mit einer Zahl) enthält, erzeugt bei is_int($string) false: <?php echo is_int($string); ?><br>

    <br><hr><br>
    Umwandlung zu Integer / intval()<br>
    Mit intval() werden Variablen zu Ganzzahlen umgewandelt, egal ob es vorher eine Number, ein String oder ein Boolean war.<br><br>

    62 -> 62<br>
    3.14 -> 3<br>
    "100mal habe ich das gesagt" -> 100<br>
    "ich habe das 100mal gesagt" -> 0<br>
    true -> 1<br>
    false -> 0<br>

    <br><hr><br>

    Float/Double / is_float()/is_double()
    <br><br>
    float, double und real sind Fließkommazahlen.
    <br><br>
    is_float()/is_double überprüft, ob es sich um eine Fließkommazahl handelt, der Rückgabewert is true (bei einer Fließkommazahl) oder false (bei einer Integer).<br>

    <br><hr><br>
    Umwandlung zu double / floatval()/doubleval()<br>
    Mit floatval() oder dem alias doubleval() werden Variablen zum Typ double umgewandelt. es ist das Gegenstück zur Funktion intval().<br><br>

    <br><hr><br>
    Strings / Zeichenketten / is_string
    <br><br>
    Strings können durch einfache oder doppelte Anführungsstriche markiert werden.<br>
    Bei einfachen Anführungsstrichen wird die Zeichenkette komplett so übernommen, bei doppelten Anführungsstrichen wird der Inhalt von genannten Variablen übernommen.<br>
    <br>
    Angenommen es gibt eine Variable $uhrzeit="8.30 Uhr", und de String lautet: Wir öffnen um $uhrzeit<br>
    Bei einfachen Anführungsstrichen wird der String wie folgt ausgeben: 'Wir öffnen um $uhrzeit'<br>
    Bei doppelten  Anführungsstrichen ist die Ausgabe wie folgt: "Wir öffnen um 8.30 Uhr"<br>
    <br>
    Sollen in einem String die Anführungsstriche nochmals verwendet werden, welche ihn am Anfang und am Ende kennzeichen, so müssen diese mit \ maskiert werden.<br>
    "Heute schaue ich die Sendung \"Aktenzeichen XY ungelöst\".<br>
    <br><br>
    is_string() ist äquivalent zu is_int() und überprüft, ob es sich um einen String handelt, der Rückgabewert ist bein einem String true und bei allen anderen Datentypen false.

    <br><hr><br>
    Umwandlung zum String / strval()<br><br>
    Mit strval() werden Datentypen zum Typ String umgewandelt.<br><br>
    0 wird umgewandelt zu dem String "0": <?php echo var_dump(strval(0)); ?><br>
    47.11 wird umgewandelt zu dem String : <?php echo var_dump(strval(47.11)); ?><br>
    true wird umgewandelt zu: <?php echo var_dump(strval(true));?><br>
    false wird umgewandelt zu einem leeren String: <?php echo var_dump(strval(false)); ?><br>
    null wird umgewandelt zu einem leeren String: <?php echo var_dump(strval(null)) ?>
    <br><br>
    Mit strlen() kann die Länge eines Strings ermittelt werden, der Rückgabewert ist ein Integer, nämlich die Anzahl der Zeichen im String.
    <br><br>
    Der Satz "Wenn man JavaScript versteht, lernt man auch leicht PHP" hat <?php echo strlen("Wenn man JavaScript versteht, lernt man auch leicht PHP") ?> Zeichen.
    
    <br><br><hr><br>
    Weitere Datentypen:<br><br>

    Weitere Datentypen sind Array, Object und Resource( Textdateien, Datenbanken oder fremde Webseiten).

    <br><br><hr><br>
    Type Casting<br><br>

    Type Casting ist eine andere Art, Datentypen umzuwandeln. Man kann das z.B. strval() durch (string)$variable ersetzen.<br><br>
    
    <?php $test="3.14"; ?>

    Gegeben ist die Variable $test = "3.14"<br>

    (int)$test ergibt den Integer 3: <?php echo var_dump((int)$test); ?><br>
    (float)$test ergibt den Float 3.14: <?php echo var_dump((float)$test); ?><br>
    (array)$test ergibt den Array ["3.14"]: <?php echo var_dump((array)$test); ?><br>
    (object)$test ergibt ein Object: <?php echo var_dump((object)$test); ?>

    <br><br><hr><br>

    <?php
    $addition1 = "3.14 ist ungefähr Pi"+"100 mal habe ich dir das gesagt";
    $addition2 = "3.14 ist ungefähr Pi" * "ich dir das 100 mal gesagt"
    ?>


    Dynamische Typenumwandlung
    <br><br>
    Mit mathematischen Operatoren (+, -, *, /) werden die Datentypen zu Integer oder Double umgewandelt und die Rechenoperation wird ausgeführt
    <br><br>
    Aus "3.14 ist ungefähr Pi" + "100 mal habe ich dir das gesagt" wird: <?php echo $addition1 ?><br>
    Aus "3.14 ist ungefähr Pi" + "ich dir das 100 mal gesagt" wird: <?php echo $addition2 ?>
    <br><br>
    Beim Verküpfungs-Operatoren (.) werden die Datentypen zu Strings umgewandelt und die Stringverknüpfung wird ausgeführt
    <br><br>
    Aus "3.14" . " ist ungefähr Pi" wird: <?php echo "3.14" . " ist ungefähr Pi" ?>
    <br><br><br>
    Nicht-boolesche Wahrheitswerte
    <br><br>
    Folgende Werte gelten als false:<br>
    - der Integer-Wert 0 <br>
    - die Fließkommazahl 0.0 <br>
    - ein leerer String "" <br>
    - ein String der die Zahl 0 enthält, also "0" <br>
    - null <br>
    - ein leeres Array <br>
    - jede Ressource
    




<br>


    

</body>
</html>