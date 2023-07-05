<?php
$dbname = "darras_reservation";
$host = "phpmyadmin.alwaysdata.com";
$username = "darras";
$password = "Lo200177";

$con = mysqli_connect($host, $username, $password, $dbname);

// Vérification
if (!$con) {
    echo "Message : Impossible de se connecter à la BD";
die();
} else {
    echo "Connexion effectuée avec succès!";
}

?>