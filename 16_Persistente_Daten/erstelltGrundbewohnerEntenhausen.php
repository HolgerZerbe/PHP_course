<?php

// Dieses Script schreibt nur Daten in das zu erstellende File entenhausen.txt



$bewohner = [
                ["vorname" =>"Micky",
                "nachname" => "Maus",
                "strasse" => "Detektivstr.",
                "hausnummer" => "33 A",
                "plz" => 12345,
                "ort" => "Entenhausen",
                ],  
                ["vorname" =>"Donald",
                "nachname" => "Duck",
                "strasse" => "Tolpatschstr.",
                "hausnummer" => "99",
                "plz" => 12350,
                "ort" => "Entenhausen",
                ],
                ["vorname" =>"Dagobert",
                "nachname" => "Duck",
                "strasse" => "Am Geldspeicher",
                "hausnummer" => "1",
                "plz" => 11111,
                "ort" => "Entenhausen-Goldstadt",
                ],
            ];



file_put_contents("daten/entenhausen.txt", serialize($bewohner));

?>