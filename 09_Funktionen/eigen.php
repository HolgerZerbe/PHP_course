<?php

function echo_HalloMyName() {
    $myName="Holger";
    echo "Hallo " . $myName;
}

function echo_HalloMyNameWithParam($myNameAsParam) {
    echo "Hallo " . $myNameAsParam;
}

function echo_HalloMyNameWith2Params($myNameAsParam1, $myNameAsParam2) {
    echo "Hallo " . $myNameAsParam1 . " " . $myNameAsParam2;
}

$nameArray = ["Holger", "Zerbe"];


function echo_HalloMyNameWithAnArrayAsParam($arrayAsParam) {
    echo "Hallo " . $arrayAsParam[0] . " " . $arrayAsParam[1];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>09_Funktionen.eigen</title>
</head>
<body>
    <?php echo_HalloMyName(); ?>
    <br>
    <?php echo_HalloMyNameWithParam("Holger (Holger als Parameter übergeben)"); ?>
    <br>
    <?php echo_HalloMyNameWith2Params("Holger (Holger als 1.Parameter übergeben)", "Zerbe (Zerbe als 1.Parameter übergeben)" ); ?>
    <br>
    <?php echo echo_HalloMyNameWithAnArrayAsParam($nameArray); ?>
    
</body>
</html>