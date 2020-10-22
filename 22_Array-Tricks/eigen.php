<?php

function pruefFunktion($a, $b) {

    return $b - $a;

}

function sortiereNamen($a, $b) {

    return [$a["nachname"], $a["vorname"]] <=> [$b["nachname"], $b["vorname"]];

}

$testArrayNumbers_1 = [23, 4711, 94, 17, 15, 666];
$testArrayNumbers_2 = [23, 4711, 94, 17, 15, 666];
$testArrayStrings = ["Berlin", "Koblenz", "New York", "Köln", "NEW BERLIN"];
$testArrayMixed = [23, "Berlin", "New Berlin", 17, 15, "NEW BERLIN"];
$testArrayMixedForAsort = [23, "Berlin", "New Berlin", 17, 15, "NEW BERLIN"];
$testArrayMixedReverse = [23, "Berlin", "New Berlin", 17, 15, "NEW BERLIN"];
$testArrayStringsMitBildernamen = ["Bild_17.jpg", "Bild_2.jpg", "Bild_21.jpg", "Bild_1.jpg", "Bild_3.jpg"];
$testArrayAssoziativ = [
    "voname" => "Micky",
    "nachname" => "Maus",
    "wohnort" => "Entenhausen",
    "familienstand" => "ledig",
    "kinder" => 0
];
$testArrayAssoziativForKsort = [
    "voname" => "Donald",
    "nachname" => "Duck",
    "wohnort" => "Entenhausen",
    "familienstand" => "ledig",
    "kinder" => 0
];
$testArrayMixedForUsort = [23, "Berlin", "New Berlin", 17, 15, "NEW BERLIN"];






echo "<h3>sort()</h3>";

echo 'sort(array) sortiert die Items eines Arrays nach ihren Werten gemäß folgenden Regeln:<br>
Groß-Buchstaben vor Klein-Buchstaben vor Ziffern<br><br>

Dabei wird der ursprüngliche Array überschrieben! Es werden neue Indizes vergeben<br><br>


$testArrayNumbers_1 = [23, 4711, 94, 17, 15, 666] ergibt: <br>';
sort($testArrayNumbers_1);
echo var_dump($testArrayNumbers_1) . "<br><br>";

echo '$testArrayStrings = ["Berlin", "Koblenz", "New York", "Köln", "NEW BERLIN"] ergibt:<br>';
sort($testArrayStrings);
echo var_dump($testArrayStrings) . "<br><br>";

echo '$testArrayMixed = [23, "Berlin", "New Berlin", 17, 15, "NEW BERLIN"] ergibt:<br>';
sort($testArrayMixed);
echo var_dump($testArrayMixed) . "<br><br>";

echo "<h3>rsort()</h3>";

echo 'rsort() funktioniert äquivalent zu sort(), nur gibt es einen <b>reversed</b> Array zurück:<br>';
echo '$testArrayMixedReverse = [23, "Berlin", "New Berlin", 17, 15, "NEW BERLIN"] ergibt:<br>';
rsort($testArrayMixedReverse);
echo var_dump($testArrayMixedReverse) . "<br><br>";

echo "<h3>Spezielle Sortierungen mit Flags (Konstanten) als zweiten Parameter</h3>";


echo 'Für spezielle Sortierungen können als zweiter Parameter Flags übergeben werden. Mehrere Parameter können mit Hilfe Pipe-Symbol kombiniert werden:<br><br>
SORT_STRING // betrachtet alle Werte beim Sortieren als String<br>
SORT_FLAG_CASE // Sortierung erfolgt unabhängig von Groß- und Kleinschreibung, funktioniert nur in der Kombination mit SORT_STRING <br>
SORT_NUMERIC // betrachtet alle Werte beim Sortieren als Number 4 = 4, "4" = 4, "4 Freunde" = 4, "11 Freunde" = 11, "Freunde" = 0<br>
SORT_NATURAL // Sortierung gemäß menschlichen Verstandsregeln! Bei Strings mit Zahlen zu benutzen:<br><br>

sort($testArrayStringsMitBildernamen , SORT_NATURAL) = ["Bild_17.jpg", "Bild_2.jpg", "Bild_21.jpg", "Bild_1.jpg", "Bild_3.jpg"] ergibt:<br>';
sort($testArrayStringsMitBildernamen , SORT_NATURAL);
echo var_dump($testArrayStringsMitBildernamen) . "<br><br>";


echo "<h3>asort()</h3>";

echo 'asort() sortiert die Werte eines Arrays, vergibt aber keine neuen Indizes!!!<br>';

echo '$testArrayMixedForAsort = [23, "Berlin", "New Berlin", 17, 15, "NEW BERLIN"] ergibt:<br>';
asort($testArrayMixedForAsort);
echo var_dump($testArrayMixedForAsort) . "<br><br>";

echo 'Eine foreach-Schleife, bei dem die einzelnen Werte eines mit Asort() sortierten Array ausgibt, ergibt dann:<br>';
    foreach($testArrayMixedForAsort as $values) {
        echo $values . "<br>";
    };

echo '<br><br>Eine for-Schleife die über die Index-Nummern läuft, bei dem die einzelnen Werte eines mit Asort() sortierten Array ausgibt, ergibt dann:<br>';


    for ($i = 0; $i < count($testArrayMixedForAsort); $i++) {
        echo($testArrayMixedForAsort[$i]) . "<br>";
    }

echo '<br><b>asort() ist besonders bei assoziativen Arrays zu empfehlen, da die Indexes (also die Keys) erhalten bleiben</b><br><br>';
echo 'Ausgabe des Arrays asort() ist besonders bei assoziativen Arrays zu empfehlen, da die Indexes (also die Keys) erhalten bleiben</b><br><br>';

echo '$testArrayAssoziativ  = ["voname" => "Micky",  "nachname"=> "Maus", "wohnort"=> "Entenhausen", "familienstand"=> "ledig", "kinder"=> 0] ergibt nach Anwendung von asort($testArrayAssoziativ, SORT_STRING | SORT_FLAG_CASE): <br>
// hier werden die Werte des Arrays case-insensitive sortiert!   <br><br>';

asort($testArrayAssoziativ, SORT_STRING | SORT_FLAG_CASE);

echo var_dump($testArrayAssoziativ). "<br><br>";

echo "<h3>ksort()</h3>";

echo 'ksort() sortiert den Array nach den Indizes eines Arrays:<br>';

echo '$testArrayAssoziativForKsort = ["voname"=> "Donald", "nachname"=> "Duck", "wohnort"=> "Entenhausen", "familienstand"=> "ledig", "kinder"=> 0] ergibt nach Anwendung von ksort($testArrayAssoziativForKsort): <br>
// hier werden die Items nach den Keys alphanumerisch sortiert! <br>';

ksort($testArrayAssoziativForKsort);
echo var_dump($testArrayAssoziativForKsort) . "<br>";

echo "<h3>usort(), uasort(), uk(sort)</h3>";

echo 'Mit diesen drei Methoden können Arrays mit <b>U</b>ser-definierten Funktionen sortiert werden (analag zu sort(), asort und ksort()<br>
die Suchfunktion muss vorher definiert sein und wird als Callback-Funktion als zweiter Parameter übergeben.<br><br>';

echo'Gegeben ist folgende Prüffunktion:<br>
function pruefFunktion($a, $b) {

    return $b - $a;

}
<br><br>';
echo 'und folgender Array $testArrayNumbers_2 = [3, 4711, 94, 17, 15, 666] <br><br>';

usort($testArrayNumbers_2, 'pruefFunktion');

echo 'usort($testArrayNumbers_2, "pruefFunktion") ergibt somit: <br>';

echo var_dump($testArrayNumbers_2) . "<br><br>";

echo "Hier macht also die Prüffunktion das gleiche wir rsort()";


echo "<h3>Spaceship-Operator <=></h3>";

echo 'Der Spaceship-Operator ersetzt die Funktion ($a < $b) ? -1 : (($a > $b) ? 1 : 0) und hilft bei der Sortierung von Strings. <br><br>';
echo 'Besonders nützlich ist er z.B. bei der Sortierung von mehrdimensionalen Arrays:<br><br>';

echo'Gegeben ist folgende Prüffunktion:<br>
function sortiereNamen($a, $b) {

    return [$a["nachname"], $a["vorname"]] <=> [$b["nachname"], $b["vorname"]];

}
<br><br>';

$personenArray = [
    ["vorname" => "Else", "nachname" => "Schmidt"],
    ["vorname" => "Jakob", "nachname" => "Maier"],
    ["vorname" => "Elisabeth", "nachname" => "Schmidt"],
    ["vorname" => "Ottfried", "nachname" => "Maierle"],
];

echo 'und folgender Array $personenArray: <br><br>';
?>
<pre><?php var_dump($personenArray) ?></pre>;

<?php

echo '<br>ergibt nach usort(personenArray, "sortiereNamen") und dem Ausführen einer For-Schleife <br>
bei der auf jedes Item ksort() ausgeführt wurde: <br><br>';

usort($personenArray, "sortiereNamen");
for ($i = 0; $i<count($personenArray); $i++) {
    ksort($personenArray[$i]);
}

?>
<pre><?php var_dump($personenArray) ?></pre>;

<?php 
echo "<h3>Anpnyme Funktionen</h3>";

echo 'Anstatt eines Funktionsnamens kann auch eine anonyme Funktion als Callback übergeben werden,<br>';
echo 'dies ist besonders nützlich bei kurzen Prüffunktionen, elche nicht nochmal verwendet werden:<br><br>';

echo'
$zahlen = [4711, 63, -111, 0 , 24, -201]; ergibt somit: <br>
usort($zahlen, fn ($a, $b) => $a <=> $b);<br>
// wichtig ist in PHP in dieser <b>(Fat) Arrow_Syntax das Schlüsselwort <b>fn</b> für eine anonyme Funktion!

<br><br>';
$zahlen = [4711, 63, -111, 0 , 24, -201];
usort($zahlen, fn ($a, $b) => $a <=> $b);
echo var_dump($zahlen);

?>