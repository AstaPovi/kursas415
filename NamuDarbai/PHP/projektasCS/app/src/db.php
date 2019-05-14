<?php
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "projektas0415");

    $mysqli = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
    if($mysqli->connect_error) {
        echo "Atsiprašome, bet svetainė susidūrė su problema.\n";
        echo 'Klaida: ' .$mysqli->connect_error. '\n' ;
        exit();
}

mysqli_query($mysqli, "INSERT INTO manopastas (vardas, email, message)
VALUES('$_POST[vardas]', '$_POST[email]', '$_POST[message]')");

//$sql = "SELECT * FROM klientai";
//$result = $$mysqli->query($sql);
//$array = $result->fetch_assoc();
//var_dump($array);
