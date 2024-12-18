<?php
session_start();
include('connect.php');
?>
<?php include('head.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="project-cards container py-5" id="formation">
    <div class="row">
        <h2 class="text-center mb-5 fw-bold text-primary">Nos Formations</h2>

        <!-- Formation Web -->
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-lg border-0 rounded">
                <img src="https://img.freepik.com/free-photo/environmental-conservation-plant-sustainability_53876-104385.jpg?ga=GA1.1.1809202442.1705419947&semt=ais_hybrid"
                     class="card-img-top rounded-top" alt="Formation Web">
                <div class="card-body text-center">
                    <h3 class="card-title text-dark">Agriculture</h3>
                    <p class="card-text text-muted">L'agriculture est un secteur vital qui assure la production des ressources alimentaires nécessaires à l'humanité. Elle repose sur la culture des terres et l'élevage du bétail, tout en étant fortement influencée par des facteurs climatiques, économiques et technologiques. Aujourd’hui, l’agriculture fait face à des défis majeurs comme le changement climatique, la gestion durable des sols et des ressources en eau, ainsi que la nécessité d’augmenter la production pour répondre à la demande mondiale. L'innovation, comme l'agriculture biologique et les technologies agricoles modernes, joue un rôle clé pour assurer une production durable et respectueuse de l’environnement.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">Voir plus</a>
                </div>
            </div>
        </div>

        <!-- Formation Mobile -->
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-lg border-0 rounded">
                <img src="https://img.freepik.com/free-photo/woman-holding-basket-full-vegetables-close-up_23-2148580024.jpg?ga=GA1.1.1809202442.1705419947&semt=ais_hybrid"
                     class="card-img-top rounded-top" alt="Formation Mobile">
                <div class="card-body text-center">
                    <h3 class="card-title text-dark">Agroalimentaire</h3>
                    <p class="card-text text-muted">Le secteur agroalimentaire joue un rôle essentiel dans l'économie mondiale en assurant la transformation des produits agricoles en aliments destinés à la consommation. Il est influencé par des facteurs tels que l'innovation technologique, la réglementation sanitaire, les attentes des consommateurs en matière de qualité et de durabilité, ainsi que les défis environnementaux liés à la production. Face à ces enjeux, l'agroalimentaire évolue
                         vers des pratiques plus responsables, comme la réduction des déchets, l'utilisation de ressources renouvelables et l'adoption de solutions écologiques pour répondre aux besoins croissants de la population.</p>
                    <a href="#" class="btn btn-outline-success btn-sm">Voir plus..</a>
                </div>
            </div>
        </div>

        <!-- Formation Réseau -->
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card h-100 shadow-lg border-0 rounded">
                <img src="https://img.freepik.com/free-photo/close-up-hand-holding-magnifying-glass_23-2148785097.jpg?ga=GA1.1.1809202442.1705419947&semt=ais_hybrid"
                     class="card-img-top rounded-top" alt="Formation Réseau">
                <div class="card-body text-center">
                    <h3 class="card-title text-dark">Analyse de l’Environnement</h3>
                    <p class="card-text text-muted">L'analyse de l'environnement consiste à examiner les facteurs internes et externes qui influencent une organisation, un projet ou un territoire. Elle permet d’identifier les opportunités et les menaces liées à des aspects politiques, économiques, socioculturels, technologiques, écologiques et légaux (méthode PESTEL). Cette analyse est essentielle pour orienter les stratégies et garantir une adaptation optimale aux évolutions 
                        de l’environnement, tout en intégrant des solutions durables et responsables face aux enjeux environnementaux et climatiques.</p>
                    <a href="#" class="btn btn-outline-info btn-sm">Voir plus..</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php include('footer.php'); ?>
    
</body>
</html>