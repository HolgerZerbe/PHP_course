<?php 
    $message=null;
    if (!(empty($_POST))) {
        $_POST["kommentar"] ? $message = nl2br($_POST["kommentar"]) : $message = null;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eintrag.php</title>
</head>
<body>
    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
        <textarea name="kommentar" id="kommentar" cols="30" rows="10">
        </textarea>
        <br>
        <input type="submit" value="Abschicken">
    </form>


    <p><?php echo $message ?></p>
</body>
</html>