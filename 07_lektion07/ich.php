<?php
$ich = [
    "firstname" => "Holger",
    "lastname" => "Zerbe",
    "age" => 51,
    "email" => "holger.zerbe@web.de",
];
$du = [
    "firstname" => "Didi",
    "lastname" => "Dudu",
    "age" => 33,
    "email" => "didu@derdiedas.de",
];

$keys = array_keys($ich);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ich-Tabelle</title>
</head>
<body>

<table>
    <thead>
        <tr>
            <td><?php echo ucfirst($keys[0]) ?></td><td><?php echo ucfirst($keys[1]) ?></td><td><?php echo ucfirst($keys[2]) ?></td><td><?php echo ucfirst($keys[3]) ?></td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo $ich["firstname"] ?></td><td><?php echo $ich["lastname"] ?></td><td><?php echo $ich["age"] ?></td><td><?php echo $ich["email"] ?></td>
        </tr>
        <tr>
            <td><?php echo $du["firstname"] ?></td><td><?php echo $du["lastname"] ?></td><td><?php echo $du["age"] ?></td><td><?php echo $du["email"] ?></td>
        </tr>
    </tbody>
</table>
    
</body>
</html>