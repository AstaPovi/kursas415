<!--
- Sukurk ir išvesk masyvą $cities4, kurio turinys yra Tokijas, Vašingtonas, Maskva, Londonas.
- Sukurk <ul> ir panaudok for ciklą, kuris pereis visą $cities4 masyvą. Naudok count( ) funkciją, kad nustatytum masyvo elementų kiekį.
- for ciklo viduje, sukurk <li>, kad galėtum išvesti miestų pavadinimus.
- Atskirame <ul>, panaudok foreach ciklą, kad galėtum išvesti miestų pavadinimus.-->

<?php

    $cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];
    print_r($cities4);
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <ul>
            <?php
                for($i = 0; $i < count($cities4); $i++){
                    echo "<li>$cities4[$i]</li>";
                }
                    echo count($cities4);
            ?>
        </ul>
        <ul>
            <?php
                foreach ($cities4 as $city) {
                    echo $city .'<br>';
                }
            ?>
        </ul>
    </body>
</html>
