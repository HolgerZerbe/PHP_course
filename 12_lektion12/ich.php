<?php 
    $ich = [
        "vorname" => "Holger",
        "nachname" =>"Zerbe",
        "alter" => "39 L",
        "geschlecht" => "vorhanden"
    ];

    $schlüsselVomArrayIch = array_keys($ich);
    $werteVomArrayIch = array_values($ich);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ich.php</title>
</head>
<body>
    <h3>Meine Ich-Tabelle mit der foreach-Schleife</h3>
    <table>
        <thead>
            <tr>
            <th style="text-align: left;">Schlüssel</th><th style="text-align: left;">Wert</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ich as $ichSchlüssel => $ichWerte) { ?>
                <tr><td><?php echo ucfirst($ichSchlüssel) ?></td><td><?php echo $ichWerte ?></td></tr>
            <?php } ?>
        </tbody>
    </table>


    <h3>Meine Ich-Tabelle mit der for-Schleife</h3>
    <table>
        <thead>
            <tr>
            <th style="text-align: left;">Schlüssel</th><th style="text-align: left;">Wert</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($schlüsselVomArrayIch); $i++) { ?>
                <tr><td><?php echo ucfirst($schlüsselVomArrayIch[$i]) ?></td><td><?php echo $werteVomArrayIch[$i] ?></td></tr>
            <?php } ?>

        </tbody>
    </table>


    <h3>Meine Ich-Tabelle mit der while-Schleife</h3>
    <table>
        <thead>
            <tr>
            <th style="text-align: left;">Schlüssel</th><th style="text-align: left;">Wert</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $j=0;
            while ($j < count($schlüsselVomArrayIch)) { ?>
                <tr><td><?php echo ucfirst($schlüsselVomArrayIch[$j]) ?></td><td><?php echo $werteVomArrayIch[$j] ?></td></tr>
            <?php
            $j++;
            } 
            ?>

        </tbody>
    </table>

</body>
</html>