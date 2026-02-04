<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DeskMitra Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" />
        <link rel="shortcut icon" href="assets\icons\DeskMitra Favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!-- Head section -->
    <header class="sticky-top">
      <?php require_once('nav.php'); ?>
    </header>

    <!-- Main section -->
    <main>

      <!-- Services section -->
       <div class="container my-5 d-flex flex-column justify-content-center">
        <h2 class="text-center pb-3">Services</h2>
        <div class="row services d-flex justify-content-center">
            <div class="col-md-2 col-sm-3 col-xs-3 border border-2 rounded-3 p-3 border-primary">
            <div class="d-flex flex-column">
            <img class="img-thumbnail rounded-3 mx-auto mb-2" src="assets/images/ug-admission.png" alt="">
            <p class="text-center">UG Admission (Goa) Assistance 2025</p>
            <button class="btn btn-primary text-light"><a href="ug_admission_form.php" class="nav-link">Apply Now</a></button></div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-3 border border-2 rounded-3 p-3 border-primary">
            <div class="d-flex flex-column">
            <img class="img-thumbnail rounded-3 mx-auto mb-2" src="assets/images/DeskMitra horizontal.png" alt="">
            <p class="text-center">service title</p>
            <button class="btn btn-primary text-light">Apply Now</button></div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-3 border border-2 rounded-3 p-3 border-primary">
            <div class="d-flex flex-column">
            <img class="img-thumbnail rounded-3 mx-auto mb-2" src="assets/images/DeskMitra horizontal.png" alt="">
            <p class="text-center">service title</p>
            <button class="btn btn-primary text-light">Apply Now</button></div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-3 border border-2 rounded-3 p-3 border-primary">
            <div class="d-flex flex-column">
            <img class="img-thumbnail rounded-3 mx-auto mb-2" src="assets/images/DeskMitra horizontal.png" alt="">
            <p class="text-center">service title</p>
            <button class="btn btn-primary text-light">Apply Now</button></div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-3 border border-2 rounded-3 p-3 border-primary">
            <div class="d-flex flex-column">
            <img class="img-thumbnail rounded-3 mx-auto mb-2" src="assets/images/DeskMitra horizontal.png" alt="">
            <p class="text-center">service title</p>
            <button class="btn btn-primary text-light">Apply Now</button></div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-3 border border-2 rounded-3 p-3 border-primary">
            <div class="d-flex flex-column">
            <img class="img-thumbnail rounded-3 mx-auto mb-2" src="assets/images/DeskMitra horizontal.png" alt="">
            <p class="text-center">service title</p>
            <button class="btn btn-primary text-light">Apply Now</button></div>
            </div>  
        </div>
       </div>

    <!-- Footer section -->
    <footer>
      <?php require_once('footer.php'); ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://kit.fontawesome.com/1757314b6a.js" crossorigin="anonymous"></script>
  </body>
</html>
