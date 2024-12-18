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
<div class="container mt-5 py-5">
  <div class="row align-items-center mt-5">
    <!-- Image -->
    <div class="col-md-4 mb-4 mb-md-0 mt-5">
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

  <!-- Localisation -->
  <div class="mt-5">
    <h2 class="fw-bold mb-4 text-center text-success">Notre Localisation</h2>
    <div class="rounded shadow-sm overflow-hidden">
      <!-- Carte Google Maps -->
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.9153864383487!2d-79.3831863844981!3d43.6532262791216!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34d4e2f2b1f5%3A0x4c0c0d3c0c1e3e1e!2sToronto%2C+ON%2C+Canada!5e0!3m2!1sen!2sca!4v1624375000000!5m2!1sen!2sca" 
        width="100%" 
        height="400" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy">
      </iframe>
    </div>
  </div>
</div>

<?php include('footer.php'); ?>
</body>
</html>