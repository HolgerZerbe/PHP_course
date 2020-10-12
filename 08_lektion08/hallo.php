<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hallo.php</title>

    <form action="<?PHP echo $_SERVER['PHP_SELF']; ?> " method="post"> 


    <input type="text" name="vorname" id="vorname" placeholder="Vorname" required>
    <input type="text" name="nachname" id="nachname" placeholder="Nachname" required>  

    <input type="submit" value="Absenden">
  
  </form>   

  <p>Hallo <?php echo ucfirst($_POST["vorname"]) . " " . ucfirst($_POST["nachname"]) ?>. Schön, dass Sie wieder da sind.</p>
</head>
<body>
    
</body>
</html>