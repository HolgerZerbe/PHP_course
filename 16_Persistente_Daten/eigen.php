<?php

$dataString="Ich bin der Inhalt eines Textfiles";

$dataNumber = 64735;

$dataArray = ["vorname" =>"Holger",
                "nachname" => "Holgerson",
                "strasse" => "IchBinDannMalWegStr.",
                "hausnummer" => "666z",
                "plz" => 97531,
                "ort" => "HasteNichtGesehenStadt",
            ];


        
// file_put_contents() schreibt Daten in einen Textfile, 
// dabei ÜBERSCHREIBT die Funktion des bestehenden Files 
// oder legt ein neues File an.

// Der erste Parameter ist ein String mit dem Inhalt,
// der zweite Parameter ist ein String mit dem Dateinamen.

// Es wird immer als Strings in Textdateien gespeichert.
// Numbers werden automatisch als String übergeben, jedoch 
// werden Sie beim Auslesen auch als String zurück gegeben.

// Um komplexere Datentypen (Arrays) zu speichen, müssen diese
// mit dre Funktion serialize() erst zu einem String umgewandelt 
// werden und beim Auslesen wieder mit unserialize() zu einem 
// Array umgewandelt werden.

// Files zum Schreiben und Lesen am besten immer in einen
// Unterordner daten packen, diesem Unterordner müssen dann im Linux
// mit chmod 757 die Rechte zum Schreiben und Lesen eingräumt werden.
// Der Unterordner verhindert, das andere auf den Projektordner zugreifen
// können


file_put_contents("daten/dataString.txt", $dataString) ;
file_put_contents("daten/dataNumber.txt", $dataNumber) ;
file_put_contents("daten/dataArray.txt", serialize($dataArray));
            
$datenAus_dataStringFile = file_get_contents("daten/dataString.txt");
$datenAus_dataNumberFile = file_get_contents("daten/dataNumber.txt");
$datenAus_dataArrayFile = unserialize(file_get_contents("daten/dataArray.txt"));

            
echo $datenAus_dataStringFile . '<br>';
echo gettype($datenAus_dataNumberFile) . ' ' . $datenAus_dataNumberFile. '<br>';
echo var_dump($datenAus_dataArrayFile) . '<br>';


// Auslesen der Datei enthausen.txt und Erstellung einer Tabelle mit diesen:


$bewohnerEntenhausen = unserialize(file_get_contents("daten/entenhausen.txt"));
$keys = array_keys($bewohnerEntenhausen[0]);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eigen.php</title>
</head>
    <body>    

    <br><br><hr><br>
        <table>
            <tr>
                <?php 
                    foreach ($keys as $tableHeadKeys) {
                        ?>
                        <th style = "text-align: left;"><?php echo ucfirst($tableHeadKeys); ?></th>
                    <?php
                    }
                ?>

            </tr>

            <?php 

                    for ($i=0; $i<count($bewohnerEntenhausen); $i++ ) {
                        ?>
                            <tr>
                                <td><?php echo $bewohnerEntenhausen[$i][$keys[0]]; ?></td>
                                <td><?php echo $bewohnerEntenhausen[$i][$keys[1]]; ?></td>
                                <td><?php echo $bewohnerEntenhausen[$i][$keys[2]]; ?></td>
                                <td><?php echo $bewohnerEntenhausen[$i][$keys[3]]; ?></td>
                                <td><?php echo $bewohnerEntenhausen[$i][$keys[4]]; ?></td>
                                <td><?php echo $bewohnerEntenhausen[$i][$keys[5]]; ?></td>
                                <td></td>
                            </tr>
                        <?php
                    }

            ?>
        </table>


</body>
</html>