<!--Sukurkite formą, kuri leis vartotojui įvesti savo vardą ir pavardę. Paspaudus mygtuką, šie duomenys turėtų būti išspausdinti naršyklėje.-->

<?php
    if(isset($_REQUEST['mygtukas'])) {
        if($_REQUEST['vardas'] && $_REQUEST['pavarde']) {
            echo 'Jūsų vardas: ' .$_REQUEST['vardas'].'<br>Jūsų pavardė: '. $_REQUEST['pavarde'];
            exit();
        } else {
            echo 'Įveskite savo vardą ir pavardę';
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>12 PHP|ND</title>
    </head>
    <body>
        <form action ="<?php $_PHP_SELF; ?>" method="post">
            <p>Įveskite savo vardą: <input type="text" name="vardas"></p>
            <p>Įveskite savo pavardę: <input type="text" name="pavarde"></p>
            <input type="submit" value="Įvesti" name="mygtukas">
        </form>
    </body>
</html>
