<?php

$datei = "daten/datei.txt";

file_exists($datei) ? $text = htmlspecialchars(file_get_contents($datei)) : $text = "<p><b>Die Datei $datei existiert noch nicht!<b><p>";

echo nl2br($text);

?>
