<?php
session_start();
include('connect.php');
?>
<?php include('head.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agriculture</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style1.css">
</head>
<body>
    <header class="py-5">
        <h2 class="breadcrumb">Agriculture</h2>
    </header>
        <section class="contentt">
            <h1>AGRICULTURE</h1>
            <p>
                Les analyses agronomiques représentent un outil essentiel pour vous aider à maîtriser vos plantations, à contrôler la qualité de vos intrants, à répondre aux exigences de l’alimentation animale tout en respectant les objectifs de production et les contraintes environnementales.
            </p>
            <p>
                <strong>Avec le laboratoire Charles Nicolle</strong>, vous êtes accompagnés dans vos choix et décisions en agriculture.
            </p>
            <p><em>Nous réalisons les analyses des produits ci-dessous :</em></p>

            <!-- Boutons pour redirection -->
            <div class="button-container">
                <a href="sol.html" class="btn">Sol</a>
                <a href="eau_irrigation.html" class="btn">Eau d’irrigation</a>
                <a href="engrais.html" class="btn">Engrais</a>
                <a href="alimentation_animale.html" class="btn">Alimentation animale</a>
            </div>
        </section>
        <div class="images  py-5 mt-5">
            <div class="image-item">
                <img src="https://img.freepik.com/free-photo/low-angle-woman-holding-vegetables_23-2148579791.jpg?ga=GA1.1.1809202442.1705419947&semt=ais_tags_boosted" alt="Sol">
            </div>
            <div class="image-item">
                <img src="https://img.freepik.com/free-photo/close-up-gardener-watering-succulent-plant_23-2147844312.jpg?ga=GA1.1.1809202442.1705419947&semt=ais_tags_boosted" alt="Eau d'irrigation">
            </div>
            <div class="image-item">
                <img src="https://img.freepik.com/free-photo/front-view-male-hands-holding-soil-little-plant_23-2148814126.jpg?ga=GA1.1.1809202442.1705419947&semt=ais_tags_boosted" alt="Sol">
            </div>
            <div class="image-item">
                <img src="https://img.freepik.com/free-photo/side-view-goat-eating-carrots_23-2148580053.jpg?ga=GA1.1.1809202442.1705419947&semt=ais_tags_boosted">
            </div>
        </div> <br>
        <?php include('footer.php'); ?>
  
</body>
</html>
