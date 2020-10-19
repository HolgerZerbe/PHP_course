<?php





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>const</title>
</head>
<body>
    
</body>
</html>

<h3>Konstanten</h3>

<p>Konstanten werden in PHP mit den Schlüsselwort const oder der Methode define gebildet</p> 
<p>Konstanten können nicht überschrieben werden, <b>ihre Werte sind global verfügbar</b></p>

<p>Defintion einer Kostanten mit define: define("KONSTANTENNAME", Wert)</p>
<p>// Als erster Parameter wird ein String als Kontantenname erwartet, als zweiter ein Wert (String/Number/Boolean usw).</p>
<p>// Als dritter Wert kann ein boolischert Wert für case_insensitive übergeben werden</p>
<p>Es ist Usus, Konstantennamen zur Kennzeichnung komplett groß zuschreiben</p>

<p>Definition der Konstanten mit define("MEINE_ERSTE_KONSTANTE", 4711): 
<?php 
define("MEINE_ERSTE_KONSTANTE", 4711);
echo MEINE_ERSTE_KONSTANTE; 
?>
</p> 
<p>Definition der Konstanten mit const MEINE_ZWEITE_KONSTANTE = "Echt Kölnisch Wasser": 
<?php 
const MEINE_ZWEITE_KONSTANTE = "Echt Kölnisch Wasser";
echo MEINE_ZWEITE_KONSTANTE; 
?>
</p> 
<p>Ursprünglich waren Konstanten nur für skalare Datentypen (integer, float, boolean oder String),<br>
seit PHP 5.6 können auch Arrays als Konstanten mit const definiert werden, ab PHP7 auch mit define</p>


<p>Definition eines konstanten Arrays mit define("MEIN_ARRAY_ALS_KONSTANTE", ["vorname" => "Donald", "nachname" => "Duck"]):</p>

<?php
define("MEIN_ARRAY_ALS_KONSTANTE", ["vorname" => "Donald", "nachname" => "Duck"]);

echo var_dump(MEIN_ARRAY_ALS_KONSTANTE);

?>

<?php