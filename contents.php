<!DOCTYPE html>
<html>
    <head>
        <title>Petrik teszt</title>
        
        <style>
            h1 {
                color: <?= $szin ?>
            }
        </style>
    </head>
    <body>
        <h1><?= $nev ?></h1>
        <p><input type="datetime-local" value="<?= $datumStr ?>"></p>
    </body>
</html>
