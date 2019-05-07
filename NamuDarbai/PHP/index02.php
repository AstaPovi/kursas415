<!--Sukurk index02.php failą. Panaudok kintamuosius ir reikšmes iš PHP 01 užduoties. Naujajame faile panaudok $miestas taip, kad gautume sakinį "Vilnius - Lietuvos sostinė" (naudok vienkartines kabutes PHP kode). Panaudok $miestas ir $šalis taip, kad gautume sakinį "Vilnius ir Lietuva sparčiai auga" (dvigubos kabutės PHP kode). Nepamiršk įkelti į GitHub.-->

<?php
    $šalis = 'Lietuva';
    $miestas = 'Vilnius';
    $largest_population = true;
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <p><?php echo $miestas. ' - Lietuvos sostinė'; ?></p>
        <p><?php echo "$miestas ir $šalis sparčiai auga"; ?></p>
    </body>
</html>
