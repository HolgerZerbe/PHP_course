<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lektionen03-Formular</title>
</head>
<body>
    <form action="">
        <input type="text" name="benutzername" value=<?php echo "Mr. X"; ?> />
        <input type="password" name="passwort1" value=<?php echo "*****";  ?> />
        <input type="text" name="passwort2" value=<?php echo "*****"; ?> />
        <input type="submit" value="registrieren" />
    </form>
</body>
</html>