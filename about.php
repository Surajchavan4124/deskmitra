<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css">
    <link rel="shortcut icon" href="assets/icons/DeskMitra Favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets\icons\DeskMitra Favicon.png" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <!-- nav section -->
     <header>
        <?php require_once("nav.php"); ?>     
    </header>

    <!-- MAIN SECTION -->
     <main>
        <!-- heading -->
        <h1 class="text-dark-emphasis section-htext1 text-center my-4">About Us</h1>

         <!-- Legal expertise is key section-->
      <div class="container py-5">
        <div class="row">
          <div
            class="section-text col-md-5 d-flex flex-column justify-content-center"
          >
            <h1 class="text-dark-emphasis section-htext2 my-4">
              Legal expertise is key!
            </h1>
            <p>
              Clear, consistent communication drives success. We prioritize open
              dialogue, ensuring alignment with your legal needs and seamless
              collaboration throughout every case.
            </p>
            <p>
              Start with the customer - find out what they want and give it to
              them.
            </p>
          </div>
          <div class="section-image col-md-7">
            <img
              width="90%"
              src="assets/images/Legal expertise is key.svg"
              alt=""
            />
          </div>
        </div>
      </div>

         <!-- Top quality advice section-->
      <div class="container py-5">
        <div class="row">
          <div class="section-image col-md-7">
            <img
              width="90%"
              src="assets/images/top quality advice.svg"
              alt=""
            />
          </div>
          <div
            class="section-text col-md-5 d-flex flex-column justify-content-center"
          >
            <h1 class="text-dark-emphasis section-htext2 my-4">
              Top quality advice
            </h1>
            <p>
              Our strategies are built for performance, scalability, and
              reliability. With meticulous attention to detail, we create clear,
              effective, and efficient solutions that protect your rights.
            </p>
            <p>
              Start with the customer – find out what they want and give it to
              them.
            </p>
          </div>
        </div>
      </div>


      <h1 class="text-dark-emphasis section-htext1 text-center my-5">Unique experiences.</h1>

      <div class="container py-5 text-center">
        <div class="row">
            <div class="col-md-4">
                <h1 class="text-dark-emphasis section-htext2 mt-4">
                    Meet our team
            </h1>
            <p>Committed professionals driving our success</p>
            <p style="font-weight: bolder; font-size: 24px;" class="m-0">Suraj Chavan</p>
            <p>Founder</p>
            <p>Founder and chief visionary, Suraj is the driving force behind the company. He loves to keep his hands full by participating in the development of services, marketing, and customer experience strategies.</p>
            </div>
        </div>
      </div>
    </main>

    <!-- footer section -->
     <footer>
        <?php require_once("footer.php"); ?>
     </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/1757314b6a.js" crossorigin="anonymous"></script>
</body>
</html>