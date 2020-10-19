<?php

$items = [
    [
        "no." => "2M",
        "name" => "Doppelringschlüssel, tiefgekröpft, metrisch",
    ],
    [
        "no." => "2Z",
        "name" => "Doppelringschlüssel, tiefgekröpft, inch",
    ],
    [
        "no." => "6M",
        "name" => "Doppelmaulschlüssel, metrisch",
    ],
    [
        "no." => "6M",
        "name" => "Doppelmaulschlüssel, inch",
    ],
    [
        "no." => "111M",
        "name" => "Maulringschlüssel, abgewinkelt, metrisch",
    ],
    [
        "no." => "111Z",
        "name" => "Maulringschlüssel, abgewinkelt, inch",
    ],   
    [
    "no." => "1952M",
        "name" => "Maulringschlüssel, tiefgekröpft, metrisch",
    ],
    [
        "no." => "1952Z",
        "name" => "Maulringschlüssel, tiefgekröpft, inch",
    ],   
];

$index = $_GET['index'] ?? null;

if (!isset($items[$index])) {
    http_response_code(404);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTTP_Request_404</title>
</head>
<body>
    <?php if (isset($items[$index])) { ?>
    <h3>Art.-Nr.: <?php echo $items[$index]["no."] ; ?></h3>
    <p>Art.-Bezeichnung: <?php echo $items[$index]["name"] ; ?></p>
    <?php
    }
    else { ?>
    <h3>Die gewünschte Information ist leider nicht verfügbar</h3>
        <?php   
    }
    ?>
</body>
</html>

