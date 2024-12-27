<?php
session_start();
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laboratoire</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0-alpha1/js/bootstrap.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">
    <script>
        window.addEventListener('scroll', () => {
            document.querySelectorAll('.animate').forEach(card => {
                const rect = card.getBoundingClientRect();
                if (rect.top < window.innerHeight && rect.bottom >= 0) {
                    card.classList.add('visible');
                }
            });
        })
    </script>
</head>
<body>
<header class="fixed-top">
    <!-- Top Bar -->
    <div class="top-bar d-flex flex-column flex-md-row justify-content-between align-items-center px-3 py-3 bg-light text-dark">
        <!-- Section 1 : Téléphone -->
        <div class="mb-2 mb-md-0 text-center text-md-start">
            <span>📞 Call us: 0126 - 922 - 0162</span>
        </div>
        <!-- Section 2 : Adresse -->
        <div class="mb-2 mb-md-0 text-center">
            📍 316 Lotissement Lina ETG 3, Sidi Maarouf, Casablanca, Maroc
        </div>
        <!-- Section 3 : Email -->
        <div class="mb-2 mb-md-0 text-center text-md-end">
            <span>📧 mail@domain.com</span>
        </div>
        <!-- Section 4 : Horaires -->
        <div class="text-center text-md-end">
            <span>🕒 Open hour: 8.00 - 18.00</span>
        </div>
    </div>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #19335c;">
        <div class="container-fluid">
            <!-- Logo -->
            <a class="navbar-brand text-white" href="#">
                <span style="color: #f6c201;">Romo</span>fyi
            </a>
            <!-- Toggle Button for Mobile -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menu Items -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link px-3 text-white" href="#accueil">ACCUEIL</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-white" href="raboratoire.php">LABORATOIRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-white" href="formation.php">FORMATION</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-white" href="analyse.php">SERVICES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3 text-white" href="contact.php">CONTACT US</a>
                    </li>
                </ul>
                <!-- Login Button -->
                <a href="#" class="btn btn-warning text-dark px-3">Login</a>
            </div>
        </div>
    </nav>
    </header>

<div id="carosell" class="carousel slide mt-5" data-bs-ride="carousel">

        <!-- Indicateurs du carrousel -->
        <div class="carousel-indicators" >
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>

        <!-- Contenu des diapositives -->
        <div class="carousel-inner mt-5"  id="accueil" >
            <div class="carousel-item active">
                <img src="https://img.freepik.com/free-photo/medical-engineer-using-dispenser-take-sample-blood-from-test-tube-lab_482257-2039.jpg?ga=GA1.1.1809202442.1705419947&semt=ais_hybrid"
                    class="d-block mx-auto" style="width:100%; height: 470px;" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="https://img.freepik.com/free-photo/scientist-working-with-chemical-substances_23-2148697258.jpg?t=st=1734455549~exp=1734459149~hmac=d14d8e2b0c36a1f8e80bad159de299dfe50455d6fc9a5152db06539e8113de72&w=996"
                    class="d-block mx-auto" style="width:100%; height: 470px;" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="https://img.freepik.com/free-photo/lab-glassware-microscope-arrangement_23-2148794426.jpg?t=st=1734455688~exp=1734459288~hmac=08c2ab078354ed0b35b120723fabae5ee0e59af96977fb512d6b027bd73027b8&w=900"
                    class="d-block mx-auto" style="width: 100%; height: 470px;" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="https://img.freepik.com/free-photo/close-up-researcher-working-with-microscope_23-2148794404.jpg?t=st=1734455775~exp=1734459375~hmac=ea695a1596c29d5351b36c65ccad0d821b7c8d1286b87947795c34755e88660d&w=1060"
                    class="d-block mx-auto" style="width: 100%; height: 470px;" alt="Image 4">
            </div>
        </div>


        <!-- Contrôles de navigation -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="container my-4">
    <div class="row align-items-center">
        <!-- Texte à gauche -->
        <div class="col-md-6">
            <h2 class="text-primary">BIENVENUE CHEZ <span style="color: #00c6d4;">3A LAB</span></h2>
            <p>
                <strong style="color: #00c6d4;">3A LAB</strong> est le partenaire privilégié de l’industrie agroalimentaire.
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
            <img src="image/vectoriel.jpg" alt="Scientifique en laboratoire" class="img-fluid rounded shadow">
        </div>
    </div>
</div>
 <!-- Section Formation -->
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
<div class="container py-2">
  <div class="row align-items-center">
    <!-- Image -->
    <div  class="col-md-4 mb-4 mb-md-0">
      <img src="image/undraw_undraw_undraw_undraw_sign_up_ln1s_-1-_s4bc_-1-_ee41_(1)_kf4d.png" 
           alt="Contactez-nous" 
           class="imm">
    </div>

    <!-- Formulaire -->
    <div class="col-md-8">
      <div class="p-4 bg-light rounded shadow-sm">
        <h2 class="fw-bold mb-4 text-success text-center">Envoyez-nous un Message</h2>
        <form>
          <!-- Nom et Email -->
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="name" class="form-label">Nom</label>
              <input type="text" class="form-control" id="name" placeholder="Votre nom" required>
            </div>
            <div class="col-md-6">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Votre email" required>
            </div>
          </div>

          <!-- Sujet et Téléphone -->
          <div class="row mb-3">
            <div class="col-md-6">
              <label for="subject" class="form-label">Sujet</label>
              <select class="form-select" id="subject" required>
                <option selected disabled>- Sélectionnez -</option>
                <option value="1">Question générale</option>
                <option value="2">Support technique</option>
                <option value="3">Autre</option>
              </select>
            </div>
            <div class="col-md-6">
              <label for="phone" class="form-label">Téléphone</label>
              <input type="tel" class="form-control" id="phone" placeholder="Votre numéro de téléphone" required>
            </div>
          </div>

          <!-- Message -->
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" rows="5" placeholder="Votre message..." required></textarea>
          </div>

          <!-- Conditions générales -->
          <div class="mb-3 form-check">
            <input class="form-check-input" type="checkbox" id="terms" required>
            <label class="form-check-label" for="terms">
              J'accepte les <a href="#" class="text-decoration-none text-success fw-bold">conditions générales</a>.
            </label>
          </div>

          <!-- Bouton -->
          <button type="submit" class="btn btn-success w-100 fw-bold">Envoyer</button>
        </form>
      </div>
    </div>
  </div>
</div>
<footer class="bg-light py-4">
    <div class="container text-center text-md-start">
        <div class="row">
            <!-- Colonne Contacts -->
            <div class="col-md-3 mb-4 mb-md-0 text-center">
                <h5 class="fw-bold text-primary">Nos Contacts</h5>
                <p>
                    <i class="bi bi-geo-alt-fill text-info"></i> Hay Mly Rachid av <br>
                    Mohamed Bouziane Res <br>
                    Ali Magasin N°1, Casablanca
                </p>
                <p>
                    <i class="bi bi-envelope-fill text-info"></i> 3alab.ma@gmail.com
                </p>
                <p>
                    <i class="bi bi-telephone-fill text-info"></i> +212 5 22 12 07 56 <br>
                    +212 6 61 32 33 88 <br>
                    +212 6 61 20 22 64
                </p>
            </div>

            <!-- Colonne Spécialités -->
            <div class="col-md-3 mb-4 mb-md-0 text-center">
                <h5 class="fw-bold text-primary">Nos spécialités</h5>
                <ul class="list-unstyled">
                    <li>Microbiologie</li>
                    <li>Produits cosmétiques et pharmaceutiques</li>
                    <li>Environnement</li>
                    <li>Biologie moléculaire</li>
                    <li>Audit & hygiène</li>
                    <li>Physico-chimie</li>
                    <li>Métaux lourds</li>
                    <li>Pesticides</li>
                    <li>Agronomie</li>
                    <li>formations</li>
                </ul>
            </div>

            <!-- Colonne Réseaux sociaux -->
            <div class="col-md-3 text-center">
                <h5 class="fw-bold text-primary">Suivez-nous</h5>
                <a href="#" class="text-primary me-3"><i class="bi bi-facebook fs-3"></i></a>
                <a href="#" class="text-primary me-3"><i class="bi bi-twitter fs-3"></i></a>
                <a href="#" class="text-primary"><i class="bi bi-linkedin fs-3"></i></a>
            </div>

            <!-- Colonne Localisation -->
            <div class="col-md-3 text-center">
                <h5 class="fw-bold text-primary">Notre Localisation</h5>
                <div class="rounded overflow-hidden shadow-sm">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.9153864383487!2d-79.3831863844981!3d43.6532262791216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34d4e2f2b1f5%3A0x4c0c0d3c0c1e3e1e!2sToronto%2C+ON%2C+Canada!5e0!3m2!1sen!2sca!4v1624375000000!5m2!1sen!2sca" 
                        width="100%" 
                        height="200" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>

    <!-- Bas de page -->
    <div class="bg-primary py-2 text-white">
        <div class="container text-center d-md-flex justify-content-between">
            <span class="fw-bold">
                Copyright © 2022–3A LAB
            </span>
            <span>
                Made With <span class="text-danger">&hearts;</span> In Casablanca by 
                <span class="fw-bold text-success">GoraMedia</span>
            </span>
        </div>
    </div>
</footer>




<!-- Exemple de JavaScript simple pour tester si le JS fonctionne -->
<script>
    document.querySelector('.dropdown-item').addEventListener('click', function() {
        alert('Menu cliqué!');
    });
</script>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
