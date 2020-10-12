<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>eintragen.php</title>

    <form action="auslesen.php" method="post">
    
        <input type="text" name="name" id="name" placeholder="Dein Vor- und Zuname">
        <br>
        <input type="email" name="email" id="email" placeholder="Deine E-Mail">
        <br>
        <textarea name="inhalt" id="inhalt" cols="30" rows="10"></textarea>
        <br>

        <!-- Wählen Sie eine Lieblingsfarbe aus:
        <br>
        <input type="radio" name="farbe" id="farbe0" value="gelb">Gelb
        <input type="radio" name="farbe" id="farbe1" value="orange">Orange
        <input type="radio" name="farbe" id="farbe2" value="rot">Rot
        <input type="radio" name="farbe" id="farbe3" value="hellgrün">Hellgrün
        <input type="radio" name="farbe" id="farbe4" value="Grün">Grün
        <input type="radio" name="farbe" id="farbe5" value="hellblau">Hellblau
        <input type="radio" name="farbe" id="farbe6" value="blau">Blau
        <input type="radio" name="farbe" id="farbe7" value="pink">Pink
        <input type="radio" name="farbe" id="farbe8" value="kornblumenblau">Kornblumenblau
        <input type="radio" name="farbe" id="farbe9 value="grau">Grau
        <br><br> -->



        Wählen Sie Ihre Lieblingsfarbe(n) aus:
        <br>
        <input type="checkbox" name="farbe[]" id="farbe0" value="gelb">Gelb
        <input type="checkbox" name="farbe[]" id="farbe1" value="orange">Orange
        <input type="checkbox" name="farbe[]" id="farbe2" value="rot">Rot
        <input type="checkbox" name="farbe[]" id="farbe3" value="hellgrün">Hellgrün
        <input type="checkbox" name="farbe[]" id="farbe4" value="grün">Grün
        <input type="checkbox" name="farbe[]" id="farbe5" value="hellblau">Hellblau
        <input type="checkbox" name="farbe[]" id="farbe6" value="blau">Blau
        <input type="checkbox" name="farbe[]" id="farbe7" value="pink">Pink
        <input type="checkbox" name="farbe[]" id="farbe8" value="kornblumenblau">Kornblumenblau
        <input type="checkbox" name="farbe[]" id="farbe9" value="grau">Grau
        <br><br>

        <input type="submit" value="Abschicken">
    
    </form>
</head>
<body>
    
</body>
</html>