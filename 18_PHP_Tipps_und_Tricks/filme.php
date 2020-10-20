<?php
$filme = [];


function filmeImArray($titel, $dauer, $genre, $regisseurVorname, $regisseurNachname, $regisseurGeschlecht) {
    return ["titel" => $titel,
            "dauer" => $dauer,
            "genre" => $genre,
            "regisseur" => [
                "vorname" =>$regisseurVorname,
                "nachname" =>$regisseurNachname,
                "geschlecht" =>$regisseurGeschlecht,
            ],
            ];
};


$filme[] = filmeImArray("Rambo", "93 min.", "Box-Film", "Silvester", "Stallone", "männlich");
$filme[] = filmeImArray("Rambo (Directors Cut)", "120 min.", "Box-Film", "Silvester", "Stallone", "männlich");
$filme[] = filmeImArray("Harry und Sally", "110 min.", "Komödie", "unbekannt", "unbekannt", "unbekannt");
$filme[] = filmeImArray("E.T", "126 min", "Science Fiction", "Steven", "Spielberg", "männlich");


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filme.php</title>
</head>




<body>
    <table>
        <thead>
            <tr>
            <?php
                $headlines = array_keys($filme[0]);

                foreach ($headlines as $headline) { ?>

                <th style = "text-align: left;"><?= ucfirst($headline); ?> </th>

                <?php } ?>
            </tr>
        </thead>
        <tbody>

        <?php


                foreach ($filme as $film) { 
                    $onlyMin = explode(" ", $film["dauer"])[0];
                    ?>
                <tr>
                    <td><?= $film["titel"]; ?></td>
                    <td>
                        <?php if ($onlyMin%60): ?>
                            <?= $film["dauer"] . " = " . intval($onlyMin/60) . " h und "  . ($onlyMin/60 - intval($onlyMin/60)) *60 . " min" ; ?>
                            <?php else: ?>
                            <?= $onlyMin/60 . " h"; 
                            endif; ?>
                    </td>
                    <td><?= $film["genre"]; ?></td>
                    <td><?= $film["regisseur"]["nachname"] . ", " . $film["regisseur"]["vorname"] . " (" . $film["regisseur"]["geschlecht"] . ")"; ?></td>
                </tr>
                <?php }
                ?>
        </tbody>

    </table>
</body>


</html>