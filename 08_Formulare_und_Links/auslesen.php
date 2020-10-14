<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>auslesen.php</title>

    <style>

    td {
    margin: 10px;
    padding: 5px;
    }

</style>

</head>
<body>

    <table>
        <thead>
            <tr>
                <td>Name</td><td>E-Mail</td><td>Kommentar</td><td>Lieblingsfarbe</td>
            </tr>
        </thead>
        <tbody>
            <tr>
            <!-- <td><?php echo $_POST["name"] ?></td><td><?php echo $_POST["email"] ?></td><td><?php echo $_POST["inhalt"] ?></td><td><?php echo ucfirst($_POST["farbe"]); ?></td>                 -->

            <td><?php echo $_POST["name"] ?></td><td><?php echo $_POST["email"] ?></td><td><?php echo $_POST["inhalt"] ?></td><td><?php echo implode(", ", $_POST["farbe"]); ?></td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>