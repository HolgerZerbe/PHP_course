<?php
    if (!(empty($_POST))) {
        $_POST["grosstext"] ? $message = strtoupper($_POST["grosstext"]) : $message = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gross.php</title>
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <input type="text" name="grosstext" id="grosstext" placeholder="Bitte Text zum Konvertieren in Großbuchstaben eingeben">
    <input type="submit" value="Submit">

    </form>
    <?php
        if (!(empty($_POST))) {
            echo $message;
        }
    ?>
</body>
</html>