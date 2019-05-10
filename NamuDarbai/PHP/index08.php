<!--
- Sukurk masyvą temp ir patalpink jame Vilniaus balandžio mėnesio oro temperatūras:
- 4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21.
- Rask ir išvesk vidutinę mėnesio temperatūrą, penkias šilčiausias ir penkias šalčiausias temperatūras.
- Patarimai:
1. Naudok foreach ciklą.
2. Naudok round( ), kad suapvalintum vidutinę temperatūrą.
3. Naudok rsort( ), kad surūšiuoti ciklą žemėjančia tvarka.
4. Naudok array_slice( ), kad surastum penkias šilčiausias ir penkias šalčiausias temperatūras.-->

<?php

    $temperature = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
    rsort($temperature);

?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>

        <ul>
            <?php
                $average = array_sum($temperature) / count($temperature);
                echo '<br> Vidutinė balandžio mėnesio temperatūra '. round($average). ' laipsnių';
            ?>
        </ul>
        <ul>
            <?php
                foreach ($temperature as $temp) {
                echo ($temp).', ';
                }
            ?>
        </ul>
        <ul>Mažiausios temperatūros:
            <?php
            $maziausios = array_slice($temperature, -5, 5);
            echo $maziausios[4]. ', '. $maziausios[3]. ', '. $maziausios[2]. ', '. $maziausios[1]. ', '. $maziausios[0] ;
            ?>
        </ul>
        <ul>Didžiausios temperatūros:
            <?php
            $didziausios =array_slice($temperature, 0, 5);
            foreach ($didziausios as $max) {
                echo ($max).', ';
            }
            ?>
        </ul>

    </body>
</html>



