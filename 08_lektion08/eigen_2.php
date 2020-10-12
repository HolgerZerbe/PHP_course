<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>08_eigen _links_forms</title>
</head>
<body>
  
  <ul>
    <li>
      <a href="produkt.php?artikelnummer=6M">Doppelmaulschlüssel 6 M</a>
    </li>
    <li>
      <a href="produkt.php?artikelnummer=2M">Doppelringschlüssel 2 M</a>
    </li>
    <li>
      <a href="produkt.php?artikelnummer=111M">Maulringschlüssel 111 M</a>
    </li>
    <li>
      <a href="produkt.php?artikelnummer=11M">Maulringschlüssel extra lang 11 M</a>
    </li>
  </ul>

  <br><hr><br>

  <!-- <?php var_dump($_SERVER) ?> -->

  <form action="<?PHP echo $_SERVER['PHP_SELF']; ?> " method="post"> 
  <!-- sendet die Daten an das selbe File, in dem
      die Eingabe erfolgt. 
      Diese Schreibweise verhindert Fehler, auch wenn
      das File später umbenannt wird -->

    <input style="display:block"  type="text" name="vorname" id="vorname" placeholder="Dein Vorname" required>
    <input style="display:block" type="text" name="nachname" id="nachname" placeholder="Dein Nachname" required> 
    <input style="display:block" type="email" name="email" id="email" placeholder="Deine E-Email" required>
    <br>
    <input type="radio" name="geschlecht" id="maennlich" value="m">Männlich
    <input type="radio" name="geschlecht" id="weiblich" value="w">Weiblich
    <input type="radio" name="geschlecht" id="divers" value="div">Divers
    <br><br>
    Bitte Skills ankreuzen: 
    <input type="checkbox" name="skills[]" id="skill1" value="HTML">HTML
    <input type="checkbox" name="skills[]" id="skill2" value="CSS">CSS
    <input type="checkbox" name="skills[]" id="skill1" value="JavaScript">JavaScript
    <input type="checkbox" name="skills[]" id="skill1" value="Node">Node
    <input type="checkbox" name="skills[]" id="skill1" value="React">React
    <input type="checkbox" name="skills[]" id="skill1" value="PHP">PHP
    <input type="checkbox" name="skills[]" id="skill1" value="Vue">Vue
    <br><br>
    Bevorzugte Stadt zum Arbeiten:
    <p><select name="stadt" id="stadt">
      <option>Berlin</option>
      <option>Hamburg</option>
      <option>Köln</option>
      <option>München</option>
    </select></p>

    Fähigkeiten erworben bei:
    <p><select name="schule[]" id="schule" multiple="multiple">
      <option value="DCI">DCI Digital Career Institute</option>
      <option value="WBS">WBS Coding School</option>
      <option value="FT">Future Training</option>
      <option value="SA">Spice Academy</option>
    </select></p>
  
    <textarea name="nachricht" id="nachricht" cols="30" rows="10">Deine Nachricht an uns</textarea>
    <br><br>
    <input style="display: block; width: 200px" type="submit" value="Absenden">
  
  </form>

  <br><hr><br>

  <p>Dein Name: <?PHP echo $_POST["vorname"] . " " . $_POST["nachname"] . " (" . $_POST["geschlecht"] . ")";?>
  <br>
  Deine E-Mail: <?php echo $_POST["email"]; ?>
  <br>
  Deine Skills: <?php echo var_dump($_POST["skills"]); ?>
  <br>
  Deine bevorzugte Arbeitsstätte: <?php echo $_POST["stadt"]; ?>
  <br>
  Ausbildungsstätten: <?php echo var_dump($_POST["schule"]); ?>
  </br></p>
  <p>Deine Nachricht an uns:</p>
  <p> <?php echo $_POST["nachricht"] ?></p>
</body>
</html>