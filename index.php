<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Patat</title>
    </head>
<body>
    <h2>Is het patat of friet?</h2>
    <?php
       $opties = ["patat"];
       echo $opties[array_rand($opties)];
    ?>
</body>
</html>
