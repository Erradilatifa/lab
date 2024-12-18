<?php
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
    <footer class=" fixed-top " >
    <!-- Top Bar -->
    <div class="top-bar d-flex flex-column flex-md-row justify-content-between align-items-center px-3 py-3 bg-light text-dark">
    <!-- Section 1 : Téléphone -->
    <div class="mb-2 mb-md-0">
        <span>📞 Call us: 0126 - 922 - 0162</span>
    </div>
    <!-- Section 2 : Adresse -->
    <div class="text-center mb-2 mb-md-0">
        📍 316 Lotissement Lina ETG 3, Sidi Maarouf, Casablanca, Maroc
    </div>
    <!-- Section 3 : Email -->
    <div class="mb-2 mb-md-0">
        <span>📧 mail@domain.com</span>
    </div>
    <!-- Section 4 : Horaires -->
    <div>
        <span>🕒 Open hour: 8.00 - 18.00</span>
    </div>
</div>


    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #19335c;" >
        <div class="container-fluid " >
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
                        <a class="nav-link px-3" href="home.php">ACCUEIL</a>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="raboratoire.php">LABORATOIRE</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link px-3" href="formation.php">FORMATION</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link px-3" href="analyse.php">SERVICES</a>
                </li>

                    <li class="nav-item">
                        <a class="nav-link px-3" href="contact.php">CONTACT US</a>
                    </li>
                </ul>
                <!-- Login Button -->
                <a href="#" class="btn login-btn">Login</a>
            </div>
        </div>
    </nav>
</footer>