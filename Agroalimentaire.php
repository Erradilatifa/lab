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
    <title>AGROALIMENTAIRE</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Styles CSS personnalisés */
        body {
            font-family: Arial, sans-serif;
        }
        h1 {
            color:rgb(111, 23, 163);
            text-transform: uppercase;
            font-size: 2.5rem;
            text-align: center;
            margin-bottom: 20px;
        }

        .contentt p {
            text-align: justify;
            margin: 10px 0;
            color: #555;
            font-size: 1.1rem;
        }

        .contentt {
            padding: 30px 15px;
        }

        .images {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 30px;
        }

        .images img {
            max-width: 80%;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .image-item {
            text-align: center;
        }

    </style>
</head>
<body>
    <!-- En-tête -->
    <header class="py-4 text-center py-5 mt-5">
    </header>

    <!-- Section Contenu -->
    <section class="contentt container py-5 mt-5">
        <h1>AGROALIMENTAIRE</h1>
        <p>
            Les analyses agronomiques représentent un outil essentiel pour vous aider à maîtriser vos plantations, 
            à contrôler la qualité de vos intrants, à répondre aux exigences de l’alimentation animale tout en 
            respectant les objectifs de production et les contraintes environnementales.
        </p>
        <p>
            <strong>Avec le laboratoire Charles Nicolle</strong>, vous êtes accompagnés dans vos choix et décisions en agriculture.
        </p>
        <p><em>Nous réalisons les analyses des produits ci-dessous :</em></p>
    </section>

    <!-- Section Image -->
    <div class="images py-5">
        
        <div class="image-item">
            <img src="https://img.freepik.com/free-photo/assortment-frozen-food-table_23-2148969442.jpg?ga=GA1.1.1809202442.1705419947&semt=ais_tags_boosted" 
                 alt="Analyse Agroalimentaire" class="img-fluid">
        </div>
        <div class="image-item">
            <img src="https://img.freepik.com/free-photo/multi-ethnic-team-analyzing-bio-meat-sample-working-biochemistry-experiment-discussing-medical-expertise-hospital-laboratory-diversity-biologists-researching-food-modified-genetically_482257-29955.jpg?ga=GA1.1.1809202442.1705419947&semt=ais_tags_boosted" 
                 alt="Analyse Agroalimentaire" class="img-fluid">
        </div>
        <div class="image-item">
            <img src="https://img.freepik.com/free-photo/fresh-very-tasty-steak_144627-10869.jpg?ga=GA1.1.1809202442.1705419947&semt=ais_tags_boosted" 
                 alt="Analyse Agroalimentaire" class="img-fluid">
        </div>
    </div>
    <?php include('footer.php'); ?>

    <!-- Scripts Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
