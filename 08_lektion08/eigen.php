<pre><?php var_dump($_GET) ?></pre>

<!-- Beim Aufrufen mit
     http://localhost/phplink/08_lektion08/eigen.php?vorname=Holger&nachname=Zerbe&strasse=IchBinDannMalWegStrasse%201A&%20plz=19999&stadt=Berlin
     erscheint 
     -->

<!-- array(5) {
      ["vorname"]=>
    string(6) "Holger"
    ["nachname"]=>
    string(5) "Zerbe"
      ["strasse"]=>
    string(18) "IchBinDannMalWegStrasse 1A"
    ["plz"]=>
    string(5) "19999"
    ["stadt"]=>
    string(6) "Berlin"
} 
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>08_eigen</title>
</head>
<body>
  <p>Mein Name ist <?php echo $_GET['vorname'] ?> <?php echo $_GET['nachname'] ?> und ich wohne in der <?php echo $_GET['strasse'] ?> in <?php echo $_GET['plz'] ?> <?php echo $_GET['stadt'] ?> </p>


</body>
</html>