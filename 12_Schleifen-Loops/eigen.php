<?php

$dallasPersonen = ["Jock", "Miss Ellie", "J.R", "Bobby", "Sue Ellen", "Pamela", "Lucy"];
$testPersonen = ["Amanda", "J.R", "Miss Ellie", "Steven"];
$coronaStaedte = ["Berlin", "Köln", "Essen", "Stuttgart", "Cottbus"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>12_lecture_eigen</title>
</head>
<body>
    <h4><u>Seriencharaktere in Dallas? </u></h4>
    <ul>
    <?php
    foreach ($dallasPersonen as $dallasPerson) { ?> 
        <li><?php 
        echo $dallasPerson ?></li> 
    <?php } 
    ?>
    </ul>

    <?php 
        foreach ($testPersonen as $testPerson) { ?>
        Ist die Person <?php echo $testPerson ?> in der Liste?
        <?php if(in_array($testPerson, $dallasPersonen)) {echo "Ja";} else {echo "Nein";} ?> <br>
        <?php } ?>


    <ul style="list-style: none">
    <?php 
        for ($i = 0; $i <10; $i++) { ?>
        <li>Dies ist der <?php echo $i+1 ?>. Schleifendurchlauf! </li>
        <?php
        } ?>
        </ul>

    <p>Diese Städte sind Corona-Hotspots (mit einer foreach Schleife):</p>
        <ul>
        <?php 
            foreach($coronaStaedte as $coronaStadt) { ?>
            <li><?php echo $coronaStadt ?></li> 
        <?php
            } ?>
        </ul>

    <p>Diese Städte sind Corona-Hotspots (mit einer normalen for Schleife):</p>
        <ul style="list-style: square">
        <?php 
            for ($j= 0; $j < count($coronaStaedte); $j++) { ?>
                <li><?php echo $coronaStaedte[$j] ?></li>
        <?php
            }?>
        </ul>


    <p>While Schleife</p>

    <?php

    $k = 0;
    $l = 1;

    while (($k>=0) && ($l<100)) {
        $ergebnis = $k . " * " . $l . " = " . $k * $l . "///";
        echo $ergebnis;
        $k++;
        $l +=3;
    }
    ?>

    <p>Do While Schleife</p>


    <?php
        $i = 0;
        do {
            echo $i;
        } while ($i > 0);
    ?>


    
</body>
</html>