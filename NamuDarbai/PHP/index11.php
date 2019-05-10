<!--Sukurkite formą, kuri leis vartotojui įvesti stačiakampio ilgį ir plotį. Įvestus duomenis panaudokite stačiakampio ploto apskaičiavimui. Rezultatą išveskite į naršyklę.-->

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>11 PHP|ND</title>
    </head>
    <body>

    <?php
        function plotasSt($a, $b){
            $plotas = $a * $b;
            return $plotas;
        }
        if(isset($_POST['mygtukas'])) {
            if($_POST['ilgis'] && $_POST['plotis']) {
                echo 'Stačiakampio plotas yra: ' .plotasSt($_POST['ilgis'],$_POST['plotis']);
            } else {
                echo 'Įveskite stačiakampio ilgį ir plotį';
            }
        } else {
    ?>
            <form action ="<?php $_PHP_SELF; ?>"; method="post">
                <p> Įveskite stačiakampio ilgį: <input type="number" name="ilgis"></p>
                <p> Įveskite stačiakampio plotį: <input type="number" name="plotis"></p>
                <input type="submit" value="Skaičiuoti" name="mygtukas">
            </form>
    <?php } ?>

    </body>
</html>
