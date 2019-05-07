<!--
Sukurk index01.php failą, o jame sukurk:
- kintamuosius šalis, miestas, populiacija
- priskirk jų reikšmes: Lietuva, Vilnius, 574221
- išvesk šiuos duomenis failo HTML dalyje (panaudok <ul> ir <li>)
- įkelk atliktą darbą į GitHub-->

<?php
    $šalis = 'Lietuva';
    $miestas = 'Vilnius';
    $populiacija = 574221;
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <ul>
            <li><?= $šalis; ?></li>
            <li><?= $miestas; ?></li>
            <li><?= $populiacija; ?></li>
        </ul>
    </body>
</html>
