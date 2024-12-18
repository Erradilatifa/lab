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
    <title>Laboratoire Charles Nicolle</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/laboratoire.css"> <!-- CSS personnalisé -->
    <!-- Icônes Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="container my-4 py-5">
    <div class="row align-items-center py-5">
        <!-- Texte à gauche -->
        <div class="col-md-6 py-5">
            <h2 class="text-primary">BIENVENUE CHEZ <span style="color: #00c6d4;">laboratoire</span></h2>
            <p>
                <strong style="color: #00c6d4;">mon laboratoire</strong> est le partenaire privilégié de l’industrie agroalimentaire.
                Nous vous offrons des solutions d’analyses agroalimentaires et environnementales, 
                d’expertise, d’audits et de formations pour garantir la qualité, la sécurité 
                et l’authenticité des aliments.
                Le Laboratoire National Mohammed VI d’Analyses Médicales (LNM6) est le premier d’une nouvelle génération de plateaux techniques fermés, spécialisés et pluridisciplinaires. Basé sur l’expertise nationale et soutenu par la Fondation Mohammed VI des Sciences et de la Santé, il se positionne comme une alternative crédible à la dépendance à l’étranger
                Le Laboratoire National Mohammed VI d’Analyses Médicales (LNM6) est le premier d’une nouvelle génération de plateaux techniques fermés, spécialisés et pluridisciplinaires. Basé sur l’expertise nationale et soutenu par la Fondation Mohammed VI des Sciences et de la Santé, il se positionne comme une alternative crédible à la dépendance à l’étranger
                

            </p>
            <h5 class="text-primary mt-4">VOTRE PARTENAIRE ANALYTIQUE DANS LE SECTEUR AGROALIMENTAIRE</h5>
            <div class="row mt-3">
                <div class="col-6">
                    <p>🔬 EXPERTISE</p>
                    <p>⚙️ EFFICACITÉ</p>
                </div>
                <div class="col-6">
                    <p>✔️ QUALITÉ</p>
                    <p>🎓 FORMATION</p>
                </div>
            </div>
        </div>
        <!-- Photo à droite -->
        <div class="col-md-6 text-center">
            <img src="https://img.freepik.com/free-photo/lab-technicians-talking-video-call-with-professional-chemist-doctor-explaning-vaccine-reactions_482257-507.jpg?ga=GA1.1.1809202442.1705419947&semt=ais_tags_boosted" alt="Scientifique en laboratoire" class="img-fluid rounded shadow">
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
</body>
</html>
