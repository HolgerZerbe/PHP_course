<?php 

$allProducts = [
    '2M' => ['number'=> '2 M',
            'text' => 'Doppelringschlüssel, Vanadium-extra, metrisch'],
    '6M' => ['number'=> '6 M',
            'text' => 'Doppelmaulschlüssel, Vanadium-extra, metrisch'],
    '111M' => ['number'=> '111 M',
            'text' => 'Maulringschlüssel, Vanadium-extra, metrisch'],
    '11M' => ['number'=> '11 M',
            'text' => 'Ringmaulschlüssel extra lang, Vanadium-extra, metrisch'],     
]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BELZER</title>
</head>
<body>

    <h2>BELZER - Dein Werkzeug</h2>

    <?php 
    $helper=$_GET['artikelnummer'];
    ?>

    <h3><?php echo ($allProducts[$helper]['number']) ?></h3>
    <h4><?php echo ($allProducts[$helper]['text']) ?></h4>
    
</body>
</html>