<?php
    $cities = ['Berlynas', 'Roma', 'Londonas'];
    $cities[] = 'Tokijas';
    $cities2 = [
        'tokijas' => 13.6,
        'vasingtonas' => 0.6,
        'maskva' => 11.5
    ];

    $cities2['londonas'] = 8.6;

    foreach ($cities2 as $miestas => $gyventojai) {
        echo "Gyventojų skaičius: $gyventojai mln.<br>";
    }
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <ul>
            <li><?php print_r($cities); ?></li>
        </ul>
    </body>
</html>
