<?php
    require __DIR__ .'/app/src/app.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Interjero puslapis</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="app/css/style.css">
    </head>

    <body>
        <?php
        include('app/views/header.php');
        include('app/views/contentProject1.php');
        include('app/views/footer.php');
        ?>
    </body>
</html>
