<?php
[$bevorzugteSprache,] = explode(
    ',',
    $_SERVER['HTTP_ACCEPT_LANGUAGE'],

);


switch ($bevorzugteSprache) {
    case "en-GB":
        $welcome = "Welcome!";
    break;
    case "de-DE":
        $welcome = "Willkommen";
    break;
    case "pl-PL":
        $welcome = "Witamy";
    break;
    case "hi-IN":
        $welcome = "स्वागत हे";
    break;
    case "kl-CR": // kl = klingonisch, CR = Cronos
        $Welcome = "nuqneH"; // Hallo auf klingonisch
    default: 
        $welcome = "Sorry, no prefered language found!";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sprache.php</title>
</head>
<body>
    <h2><?php echo $welcome ?></h2>
</body>
</html>