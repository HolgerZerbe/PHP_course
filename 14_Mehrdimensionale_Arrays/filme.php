<?php
$filme = [];

// Übung 64-67:

// function filmeImArray($titel, $dauer, $genre, $regisseurVorname, $regisseurNachname, $regisseurGeschlecht) {
//     return ["titel" => $titel,
//             "dauer" => $dauer,
//             "genre" => $genre,
//             "regisseur" => [
//                 "vorname" =>$regisseurVorname,
//                 "nachname" =>$regisseurNachname,
//                 "geschlecht" =>$regisseurGeschlecht,
//             ],
//             ];
// };


// $filme[] = filmeImArray("Rambo", "93 min.", "Box-Film", "Silvester", "Stallone", "männlich");
// $filme[] = filmeImArray("Harry und Sally", "110 min.", "Komödie", "unbekannt", "unbekannt", "unbekannt");
// $filme[] = filmeImArray("E.T", "126 min", "Science Fiction", "Steven", "Spielberg", "männlich");


// Übung 68-69:


// function filmeImArray($titel, $dauer, $genre, $regisseurVorname, $regisseurNachname, $regisseurGeschlecht, $darstellerString) {
//     return ["titel" => $titel,
//             "dauer" => $dauer,
//             "genre" => $genre,
//             "regisseur" => [
//                 "vorname" =>$regisseurVorname,
//                 "nachname" =>$regisseurNachname,
//                 "geschlecht" =>$regisseurGeschlecht,
//             ],
//             "darsteller" => explode("," , $darstellerString),
//             ];
// };


// $filme[] = filmeImArray("Rambo", "119 min.", "Box-Film", "John G.", "Avildsen", "m", "Sylvester Stallone, Talia Shire");
// $filme[] = filmeImArray("Harry und Sally", "90 min.", "Komödie", "Rob", "Rainer", "m", "Billy Crystal, Meg Ryan, Carrie Fisher");
// $filme[] = filmeImArray("E.T", "115 min", "Science Fiction", "Steven", "Spielberg", "m", "Henry Thomas, Dee Wallace-Stone, Robert MacNaughton, Drew Barrymore");


// Übung 70

function filmeImArray($titel, $dauer, $genre, $regisseurVorname, $regisseurNachname, $regisseurGeschlecht, $darsteller1, $darsteller2, $darsteller3=null,  $darsteller4=null) {
    
    $darstellerArray[] = [
        "vorname" => explode(" ", $darsteller1)[0],
        "nachname" => explode(" ", $darsteller1)[1],
        "geschlecht" => explode(" ", $darsteller1)[2],
    ];
    $darstellerArray[] = [
        "vorname" => explode(" ", $darsteller2)[0],
        "nachname" => explode(" ", $darsteller2)[1],
        "geschlecht" => explode(" ", $darsteller2)[2],
    ];
    if (!($darsteller3 === null)) {
        $darstellerArray[] = [
            "vorname" => explode(" ", $darsteller3)[0],
            "nachname" => explode(" ", $darsteller3)[1],
            "geschlecht" => explode(" ", $darsteller3)[2],
        ];
    }
    if (!($darsteller4 === null)) {
        $darstellerArray[] = [
            "vorname" => explode(" ", $darsteller4)[0],
            "nachname" => explode(" ", $darsteller4)[1],
            "geschlecht" => explode(" ", $darsteller4)[2],
        ];
    }
    
    return ["titel" => $titel,
            "dauer" => $dauer,
            "genre" => $genre,
            "regisseur" => [
                "vorname" =>$regisseurVorname,
                "nachname" =>$regisseurNachname,
                "geschlecht" =>$regisseurGeschlecht,
            ],
            "darsteller" => $darstellerArray,
            ];
};


$filme[] = filmeImArray("Rambo", "119 min.", "Box-Film", "John G.", "Avildsen", "m", "Sylvester Stallone m" , "Talia Shire f");
$filme[] = filmeImArray("Harry und Sally", "90 min.", "Komödie", "Rob", "Rainer", "m", "Billy Crystal m", "Meg Ryan f", "Carrie Fisher f");
$filme[] = filmeImArray("E.T", "115 min.", "Science Fiction", "Steven", "Spielberg", "m", "Henry Thomas m ", "Dee Wallace-Stone m", "Robert MacNaughton m", "Drew Barrymore f");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>filme.php</title>
</head>

<!-- <pre><?php echo var_dump($filme) ?></pre> -->

<!-- // Übung 64 - 67 -->

<!-- <body>
    <table>
        <thead>
            <tr>
            <?php
                $headlines = array_keys($filme[0]);

                foreach ($headlines as $headline) { ?>

                <th style = "text-align: left;"><?php echo ucfirst($headline); ?> </th>

                <?php } ?>
            </tr>
        </thead>
        <tbody>

        <?php


                foreach ($filme as $film) { ?>
                <tr>
                    <td><?php echo $film["titel"]; ?></td>
                    <td><?php echo $film["dauer"]; ?></td>
                    <td><?php echo $film["genre"]; ?></td>
                    <td><?php echo $film["regisseur"]["nachname"] . ", " . $film["regisseur"]["vorname"] . " (" . $film["regisseur"]["geschlecht"] . ")"; ?></td>
                </tr>
                <?php }
                ?>
        </tbody>

    </table>
</body> -->


<!-- // Übung 68 und 69: -->

<!-- <body>
    <table>
        <thead>
            <tr>
            <?php
                $headlines = array_keys($filme[0]);

                foreach ($headlines as $headline) { ?>



                <th style = "text-align: left;"><?php echo ucfirst($headline); ?> </th>

                <?php } ?>
            </tr>
        </thead>
        <tbody>

        <?php


                foreach ($filme as $film) { ?>
                <tr>
                    <td><?php echo $film["titel"]; ?></td>
                    <td><?php echo $film["dauer"]; ?></td>
                    <td><?php echo $film["genre"]; ?></td>
                    <td><?php echo $film["regisseur"]["nachname"] . ", " . $film["regisseur"]["vorname"] . " (" . $film["regisseur"]["geschlecht"] . ")"; ?></td>
                    <td><?php echo implode(", " , ($film["darsteller"])) ?></td>
                </tr>
                <?php }
                ?>
        </tbody>

    </table>
    </body> -->


<!-- Übung 70 -->

    <body>
    <table>
        <thead>
            <tr>
            <?php
                $headlines = array_keys($filme[0]);

                foreach ($headlines as $headline) { ?>



                <th style = "text-align: left;"><?php echo ucfirst($headline); ?> </th>

                <?php } ?>
            </tr>
        </thead>
        <tbody>

        <?php


                foreach ($filme as $film) { ?>
                <tr>
                    <td><?php echo $film["titel"]; ?></td>
                    <td><?php echo $film["dauer"]; ?></td>
                    <td><?php echo $film["genre"]; ?></td>
                    <td><?php echo $film["regisseur"]["vorname"] . $film["regisseur"]["nachname"] . " (" . $film["regisseur"]["geschlecht"] . ")"; ?></td>
                    <td><?php 
                        $alleDarsteller = null;
                        for ($i = 0; $i < count($film["darsteller"]); $i++) {

                            if ($i < count($film["darsteller"])-1) {
                            $alleDarsteller .= $film["darsteller"][$i]["vorname"] . " " . $film["darsteller"][$i]["nachname"] . " (" . $film["darsteller"][$i]["geschlecht"] . "), ";
                        }
                            else {
                                $alleDarsteller .= $film["darsteller"][$i]["vorname"] . " " . $film["darsteller"][$i]["nachname"] . " (" . $film["darsteller"][$i]["geschlecht"] . ")";
                            }

                        };
                    
                    echo $alleDarsteller ?></td>
                </tr>
                <?php }
                ?>
        </tbody>

    </table>
    </body>
</html>