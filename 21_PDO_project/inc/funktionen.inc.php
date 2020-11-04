<?php

function formatiereDatum($dbDatum, $format = '%d.%m.%Y')
{
    return strftime($format, strtotime($dbDatum));
}

function bereinige($benutzerEingabe, $encoding = 'UTF-8')
{
    return htmlspecialchars(
        strip_tags($benutzerEingabe),
        ENT_QUOTES | ENT_HTML5,
        $encoding
    );
}

function redirect($url)
{
    header('Location: ' . $url);
    exit;
}

?>