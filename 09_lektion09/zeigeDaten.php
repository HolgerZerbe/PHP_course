<?php 

$testuser = [
    "name" => "Holger Zerbe",
    "geburtstag" => "24.02.1969",

];

function zeigeDaten($person) {
    echo "Die Person heißt " . $person["name"] . " und ist am " . $person["geburtstag"] . " geboren.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php zeigeDaten($testuser); ?>
    
</body>
</html>