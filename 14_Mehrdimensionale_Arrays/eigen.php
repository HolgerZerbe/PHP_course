<?php

// Erzeugung eine zweidimensionalen Arrays

$einMalEins = [
    [1, 2, 3, 4, 5, 6, 7, 8 , 9, 10],
    [2 ,4, 6, 8, 10, 12, 14, 16, 18, 20],
    [3, 6, 9, 12, 15, 18, 21, 24, 27, 30],
    [4, 8, 12, 16, 20, 24, 28, 32, 36, 20],
];


// Erzeugung eines mehrdimensionalen, assoziativen Arrays

$staedte = ["Berlin" => [
                        "land" => "Deutschland",
                        "hauptstadt" => "ja",
                        "einwohner" => 3600000,
                        "sehenwuerdigkeiten" => ["Brandenburger Tor", "Mauergedenkstätte", "Fernsehturm"],
                        ],
            "London" => [
                        "land" => "Großbritannien",
                        "hauptstadt" => "ja",
                        "einwohner" => 7500000,
                        "sehenwuerdigkeiten" => ["Tower", "Tower Bridge", "London Eye"],
                        ],
            "New York" => [
                        "land" => "USA",
                        "hauptstadt" => "nein",
                        "einwohner" => 8400000,
                        "sehenwuerdigkeiten" => ["Empire State Building", "World Trade Center", "Times Square"],
                        ],
                    ];

                    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>14_Mehrdimensionale_Array_eigen.php</title>
</head>
<body>

<!-- // Auslesen des achten Wertes des dritten Arrays -->

<?php echo 'Der achte Wert des dritten Arrays wird ausgelesen mit echo $einMalEins[2][7] = ' . $einMalEins[2][7] . '<br>' ?>

<!-- // Komplettanzeige des Arrays $staedte -->
<pre><?php echo var_dump($staedte); ?></pre>

<?php echo 'Auslesen der Einwohnerzahl von New Yorks mit echo $staedte["New York"]["einwohner"]: ' . $staedte["New York"]["einwohner"] . '<br>' ?>


<br><hr><br>

<?php       
    $stadtnamen = array_keys($staedte);
        
    for ($i = 0; $i < count($stadtnamen) ; $i++) { 
        ?>
        <table>
            <thead>
                <tr>
                    <th><?php echo $stadtnamen[$i]; ?></th>
                        <?php 
                            $titles = array_keys($staedte[$stadtnamen[$i]]);
                            $values = array_values($staedte[$stadtnamen[$i]]);
                        ?>
                </tr>
            </thead>
            <tbody>
            <?php   for ($j = 0; $j < count($titles); $j++) { ?>
                <tr>
                    <td><?php echo ucfirst($titles[$j]) .": "; ?></td>
                    <td>
                        <?php 
                            if ($titles[$j] !== "sehenwuerdigkeiten") {
                                echo $values[$j];}
                            else { ?>
                                <ol>
                                    <?php foreach ($staedte[$stadtnamen[$i]]["sehenwuerdigkeiten"] as $sehenswert) { ?>
                                        <li><?php echo $sehenswert ?></li>
                                    <?php
                                    } ?>
                                </ol>
                                <?php
                                };
                        
                        ?></td>
                </tr>
            <?php 
            }
            ?>
            </tbody>
        </table>

    <?php } ?>

 
</body>
</html>