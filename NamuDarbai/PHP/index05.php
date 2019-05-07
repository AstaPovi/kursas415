<!--
- Sukurk ir išvesk naują $cities3 masyvą masyve, kurio duomenys:
- Tokijas - 13.6, 1868, Japonija
- Vasingtonas - 0.6, 1790, JAV
- Maskva - 11.5, 1147, Rusija
- Pridėk: Londonas - 8.6, 43, Anglija
- HTML dalyje, sukurk <ul> ir panaudok <li>, kad išvestum duomenis apie Londoną tokiu formatu:
- Gyventojų skaičius: 8.6 mln.
- Įkurtas: 43 m.
- Šalis: Anglija
-->

<?php
    $cities3 = [
        'Tokijas' => [13.6, 1868, 'Japonija'],
        'Vasingtonas' => [0.6, 1790, 'JAV'],
        'Maskva' => [11.5, 1147, 'Rusja']
    ];

    $cities3['Londonas'] = [8.6, 43, 'Anglija'];

?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <ul>
            <li>Gyventojų skaičius: <?php echo $cities3['Londonas'][0]; ?> mln.</li>
            <li>Įkurtas: <?php echo $cities3['Londonas'][1] ?></li>
            <li> Šalis: <?php echo $cities3['Londonas'][2] ?></li>
        </ul>
    </body>
</html>
