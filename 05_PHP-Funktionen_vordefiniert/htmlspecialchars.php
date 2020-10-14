<?php

$string = htmlspecialchars("'  & < >", ENT_QUOTES)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>05_übung_19</title>
</head>
<body>

    <p>Mit htmlspecialchars() werden in einem String die Sonderzeichen <?php echo $string ?>zu Enteties ersetzt.
    </p>

  

</body>
</html>