<?php
// Connexion à la base de données
$servername = "phpmyadmin.alwaysdata.com";
$username = "root";
$password = "Lo200177";
$dbname = "darras_reservation";

require_once 'connexion.php';


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Vérification si le formulaire est soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données envoyées par le formulaire
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $destination = $_POST["destination"];
    $categorie = $_POST["categorie"];
    $date_depart = $_POST["date_depart"];
    $date_retour = $_POST["date_retour"];
    $nb_personnes = $_POST["nb_personnes"];
    $commentaires = $_POST["commentaires"];

    // Préparation de la requête SQL d'insertion
    $sql = "INSERT INTO reservation (nom, email, telephone, destination, categorie, date_depart, date_retour, nb_personnes, commentaires)
            VALUES ('$nom', '$email', '$telephone', '$destination', '$categorie', '$date_depart', '$date_retour', '$nb_personnes', '$commentaires')";

    // Exécution de la requête SQL
    if ($conn->query($sql) === TRUE) {
        echo "Réservation enregistrée avec succès.";
    } else {
        echo "Erreur lors de l'enregistrement de la réservation : " . $conn->error;
    }
}

// Fermeture de la connexion à la base de données
$conn->close();
?>