<?php

$timestamp = file_get_contents("daten/zeit.txt");

echo date("l, d.M.Y H:i:s", $timestamp) . " Uhr";

?>