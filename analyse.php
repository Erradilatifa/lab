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
   <!-- <link rel="stylesheet" href="css/style.css">-->
    <style>
/* Conteneur Flexbox pour aligner les cercles */
nav {
    display: flex; /* Aligne les éléments sur une ligne */
    justify-content: center; /* Centre les cercles horizontalement */
    gap: 50px; /* Espacement entre les cercles */
    margin: 20px 0;
}

/* Styles des cercles */
.section {
    display: flex;
    align-items: center;
    justify-content: center;

    width: 200px; /* Taille du cercle */
    height: 100px; /* Taille du cercle */
    border-radius: 50%; /* Rend les blocs circulaires */
    color: white;
    font-size: 0.9rem;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    font-weight: bold;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Couleurs des cercles */
.agroalimentaire { background-color: #A89098; }
.environnement { background-color: #8BB94A; }
.cosmetique { background-color: #EAA02B; }
.agriculture { background-color: #7F5A7A; }
.antiseptique { background-color: #BF6F6F; }

/* Effet hover */
.section:hover {
    transform: scale(1.1); /* Agrandit légèrement le cercle */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Ajoute une ombre */
    opacity: 0.9;
}


    </style>
</head>
<body>
    <section class="container py-5 mt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold mb-4">ANALYSE</h2>
                <p>
                    Partageant les mêmes valeurs et ayant une mission similaire, le Laboratoire Charles Nicolle Environnement et Sécurité Alimentaire reste
                    <span class="text-danger fw-bold">le leader national dans le milieu des laboratoires d’analyses.</span>
                </p>
                <p>Notre laboratoire opère dans différents domaines :</p>
                <ul class="custom-list">
    <li>
        <a href="#">Agroalimentaire</a>
    </li>
    <li>
        <a href="#">Environnement</a>
    </li>
    <li>
        <a href="#">Cosmétique</a>
    </li>
    <li>
        <a href="#">Agriculture</a>
    </li>
    <li>
        <a href="#">Antiseptique et désinfectant</a>
    </li>
</ul>
  </div>
            <div class="col-md-6 mt-5 text-center">
                <img src="https://img.freepik.com/free-photo/female-medical-scientific-researcher-woman-doctor-looking-test-tube_273609-13604.jpg?t=st=1734463380~exp=1734466980~hmac=f9edddc74061efeff756ef01361853ec7565ec132663e5ed4dfa61c4726566c0&w=996" alt="Laboratoire d'analyse" class="img-fluid rounded-circle shadow-lg">
            </div>
        </div>
    </section>
    <nav>
    <a href="Agroalimentaire.php" class="section agroalimentaire">
        &#127793; Agroalimentaire
    </a>
    <a href="AGRICULTURE.php" class="section agriculture">
        &#127806; Agriculture
    </a>
    <a href="carte.php" class="section environnement">
        &#127758; Environnement
    </a>
    <a href="carte.php" class="section cosmetique">
        &#128065; Cosmétique
    </a>

    <a href="carte.php" class="section antiseptique">
        &#128716; Antiseptique et désinfectant
    </a>
</nav> <br> <br>
    <?php include('footer.php'); ?>
    

    
</body>
</html>