<?php
session_start();
include('connect.php');?>
<?php include('head.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audit et Conseil - Formation</title>
    <!-- Inclure Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* Styles personnalisés */
        .section-title {
    text-transform: uppercase; /* Texte en majuscules */
    font-weight: bold; /* Texte en gras */
    font-size: 26px; /* Taille de la police */
    margin-top: 60px; /* Marge supérieure */
    margin-bottom: 20px; /* Marge inférieure */
    text-align: center; /* Alignement centré */
    border-bottom: 3px solid #ddd; /* Bordure inférieure */
    padding-bottom: 10px; /* Espacement sous le texte */
    color:rgb(9, 125, 50); /* Couleur du texte */
    transition: all 0.3s ease; /* Animation fluide */
}

.section-title:hover {
    color: #007BFF; /* Changement de couleur au survol */
    border-bottom: 3px solid #007BFF; /* Changement de bordure au survol */
    cursor: pointer; /* Curseur pointeur */
    letter-spacing: 1px; /* Espacement des lettres */
}

        .custom-list li {
            margin-bottom: 10px;
        }
        .custom-img {
            border-radius: 50%;
            object-fit: cover;
            width: 100%;
            max-width: 300px;
            height: 300px;
        }
    </style>
</head>
<body>
    <!-- Conteneur principal -->
    <div class="container my-5 ">
        <div class="row">
            <!-- Colonne Audit et Conseil -->
            <div class="col-md-6 py-5" >
                <h2 class="section-title">Audit et Conseil</h2>
                <img src="https://img.freepik.com/free-photo/plan-planning-strategy-bysiness-ideas-concept_53876-132300.jpg?ga=GA1.1.1809202442.1705419947&semt=ais_tags_boosted" alt="Audit Conseil" class="custom-img mb-4">
                <p>Les professionnels de la restauration commerciale ou de la distribution ont une 
                    grande responsabilité en matière de sécurité et d’hygiène. 
                    Définies par de nombreux textes réglementaires, ils doivent mettre en œuvre les moyens nécessaires pour assurer la sécurité des denrées alimentaires.</p>
                <p>Les laboratoires d’analyses spécialisés dans l’environnement, l’agriculture et l’agroalimentaire occupent une place essentielle dans la chaîne de valeur, garantissant la conformité aux normes, la qualité des produits et la protection des ressources naturelles. Cependant, face à l’évolution rapide des réglementations, des attentes des consommateurs et des innovations technologiques, ces laboratoires doivent relever des défis complexes.

Le conseil en laboratoires d’analyses s’impose comme un levier stratégique pour accompagner ces structures dans leur quête d’excellence. Il offre un soutien personnalisé pour optimiser les processus analytiques, assurer la fiabilité des résultats, mettre en place des systèmes qualité performants et intégrer les technologies de pointe. Ce service contribue à renforcer la compétitivité des laboratoires tout en favorisant une agriculture durable, une gestion responsable des ressources environnementales et une sécurité alimentaire accrue.</p>
                <!--<img src="https://via.placeholder.com/300" alt="Document Audit" class="custom-img"> -->
                
            </div>

            <!-- Colonne Formation -->
            <div class="col-md-6 py-5" >
                <h2 class="section-title">Formation</h2>
                <img src="https://img.freepik.com/free-photo/businessman-showing-global-warming-icon-his-colleagues-screen_23-2147826563.jpg?ga=GA1.1.1809202442.1705419947&semt=ais_tags_boosted" alt="Formation" class="custom-img mb-4">
                <p>Dans un contexte mondial marqué par une prise de conscience accrue des enjeux environnementaux, de la sécurité alimentaire et de la durabilité des pratiques agricoles, les laboratoires d’analyses jouent un rôle central. La formation en analyses environnementales, agricoles et agroalimentaires vise à outiller les professionnels avec des compétences pratiques et théoriques leur permettant de répondre aux exigences croissantes en matière de qualité, de conformité et d’innovation.

                Cette formation aborde des thématiques variées, allant de l’analyse des sols et de l’eau, essentielle pour une agriculture durable, à la qualité des produits agroalimentaires, en passant par le contrôle des impacts environnementaux des activités humaines. Elle constitue une opportunité d’acquérir des connaissances approfondies sur les outils analytiques, les normes réglementaires et les bonnes pratiques, afin de répondre aux besoins des secteurs concernés avec expertise et rigueur.</p>

                <p>La <span>formation dans le domaine des analyses microbiologiques et physico-chimiques est assurée par le laboratoire Charles Nicolle.</p>
                <p>On vous propose aussi de partager avec vous la connaissance de nos experts dans le cadre d’un programme de formations spécifiques.</p>
                <ul class="custom-list">
                    <li>La sécurité alimentaire</li>
                    <li>HACCP</li>
                    <li>Bonnes pratiques d’hygiène et fabrication</li>
                    <li>Paquet Hygiène</li>
                    <li>Nettoyage et désinfection en agro-alimentaire</li>
                    <li>Installation/conception d’un laboratoire de contrôle</li>
                    <li>Techniques microbiologiques et physico-chimiques (aliments, eaux)</li>
                </ul>
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>

    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
