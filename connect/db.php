<?php
try {
    // user && pass
    $user = "root";
    $pass = "";
    // connect to database 
    $dbh = new PDO('mysql:host=localhost;dbname=doxbin', $user, $pass);

// instead of a raise error / leaking path will catch the error and handle it
} catch (PDOException $e) {
    echo "PDO Driver connection error";
    die();
}
?>