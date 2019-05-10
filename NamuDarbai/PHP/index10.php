<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>

    <?php

        function plotasSt($a, $b) {
            $plotas = $a * $b;
            return $plotas;
        }

        $atsakymas = plotasSt(10, 20);
        echo "Atsakymas:  $atsakymas";

    ?>

    </body>
</html>
