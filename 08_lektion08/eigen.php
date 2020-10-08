<pre><?php var_dump($_GET) ?></pre>

<!-- Beim Aufrufen mit
     http://localhost/phplink/08_lektion08/eigen.php?vorname=Holger&nachname=Zerbe&strasse=IchBinDannMalWegStrasse%201A%22&%20plz=19999&stadt=Berlin
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