<?php
$host = 'localhost';        // Adresse du serveur MySQL
$dbname = 'raboratoire';           // Nom de la base de données
$username = 'root';         // Nom d'utilisateur MySQL
$password = '';             // Mot de passe MySQL

try {
    // Création d'une connexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // En cas d'échec, afficher une erreur
    die("Erreur de connexion : " . $e->getMessage());
}
?>

