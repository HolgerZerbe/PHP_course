<?php
    $sprachen = ['PHP', 'JavaScript', 'Ruby', 'Python', 'Java', 'Perl'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sprachen.php</title>
</head>
<body>
    <p>Liste mit foreach-Schleife</p>
    <ol>
        <?php foreach ($sprachen as $sprache) { ?>
            <li><?= $sprache; ?> </li> 
        <?php } ?>
    </ol>

    <p>Liste mit for-Schleife</p>
    <ol>
        <?php for ($i=0; $i<count($sprachen); $i++) { ?>
            <li><?= $sprachen[$i]; ?></li>
        <?php } ?>
    </ol>

    <p>Liste mit while-Schleife</p>
    <ol>
        <?php 
            $j=0;
            while ($j<count($sprachen)) { ?>
                <li><?= $sprachen[$j]; ?></li>
            <?php 
            $j++; 
        } ?>
    </ol>



</body>
</html>