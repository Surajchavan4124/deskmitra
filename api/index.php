<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>DeskMitra Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css">
    <link rel="shortcut icon" href="assets/icons/DeskMitra Favicon.png" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    
  </head>
  <body>
    <!-- Head section -->
    <header class="sticky-top">
      <?php require_once('nav.php'); ?>
    </header>

    <!-- Main section -->
    <main class="d-flex flex-column justify-content-center align-items-center overflow-x-hidden">
      <!-- simplify. solve. succeed section-->
      <div class="container py-5">
        <div class="row">
          <div
            class="section-text col-md-5 d-flex flex-column justify-content-center"
          >
            <h1 class="text-dark-emphasis section-htext1 my-4">
              Simplify. <br />
              Solve. <br />
              Succeed.
            </h1>
            <p>
              Offering tailored service strategies to drive growth and success.
            </p>
            <div class="mt-3">
              <button class="btn btn-primary px-5 py-3 mb-5">
                <a href="services.php" class="button-text nav-link">Our services</a>
              </button>
            </div>
          </div>
          <div class="section-image col-md-7">
            <img
              width="90%"
              src="../assets/images/simplify solve succeed.svg"
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
              src="../assets/images/top quality advice.svg"
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
              src="../assets/images/Legal expertise is key.svg"
              alt=""
            />
          </div>
        </div>
      </div>

      <!-- Key Milestone & Innovation hub-->
      <div class="container py-5">
        <div class="row section-cards">
          <div class="col-md-6 col-sm-12 section-card p-5 rounded rounded-3">
            <h1 class="section-htext3">Key<br />Milestone</h1>
            <p class="mb-5">Achieving justice together</p>
            <img src="../assets/images/key milestone.svg" alt="" />
          </div>
          <div class="col-md-6 col-sm-12 section-card p-5 rounded rounded-3">
            <h1 class="section-htext3">Innovation<br>Hub</h1>
            <p class="mb-5">Where justice meets innovation</p>
            <img src="../assets/images/innovation hub.svg" alt="" />
          </div>
        </div>
      </div>

            <!-- Need legal help section-->
      <div class="container py-5 row">
        <div>
          <h2>Need legal help?</h2>
          <p>In this section, you can address common legal questions efficiently.</p>
        </div>
          <div class="help-card col-md-4">
            <p class="help-question my-1">What sets us apart?</p>
            <p class="help-answer">We deliver customized legal solutions, ensuring that every client receives top-tier representation tailored to their unique situation.</p>
          </div>
          <div class="help-card col-md-4">
            <p class="help-question my-1">Is the website user-friendly?</p>
            <p class="help-answer">Our website is designed for easy navigation, allowing you to find the legal services you need quickly and efficiently.</p></div>
            <div class="help-card col-md-4">
            <p class="help-question my-1">Can you trust our legal partners</p>
            <p class="help-answer">We collaborate with trusted, high-quality legal partners to bring you reliable and top-notch legal services.</p>
          </div>
          <div class="help-card col-md-4">
            <p class="help-question my-1">What legal services do we offer?</p>
            <p class="help-answer">We provide legal support through various channels, including whatsapp chat, email, and phone, to assist with any inquiries.</p>
          </div>
          <div class="help-card col-md-4">
            <p class="help-question my-1">How is your case information secured?</p>
            <p class="help-answer">Your case information is protected by advanced confidentiality measures and security protocols, keeping your personal details secure.</p>
          </div>
          <div class="help-card col-md-4">
            <p class="help-question my-1">Are links to other legal resources approved?</p>
            <p class="help-answer">Although this website may be linked to other legal resources, we are not, directly or indirectly, implying any approval.</p>
          </div>
          </div>
        </div>
      </div>


      <!-- contact us today card -->
      <div
        class="my-5 px-4 py-5 d-flex align-items-center container rounded rounded-3 bg-primary contact-us-section row"
      >
      <div class="contact-us-image col-md-4">
        <img src="../assets/images/contact uştoday.svg" alt="">
      </div>
      <div class="col-md-7 contact-us-text">
      <h1 class="section-htext2 my-4 text-white my-auto">
         Contact Us today!</h1>
        <p class="text-white mt-3">Join our dedicated team focused on providing exceptional services.</p>
        <div class="mt-5">
          <button class="btn btn-light px-5 py-3">
            <a href="contact.php" class="nav-link">Contact Us</a>
          </button>
        </div>
        </div>
      </div>
    </main>

    <!-- Footer section -->
    <footer>
      <?php require_once('footer.php'); ?>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/1757314b6a.js" crossorigin="anonymous"></script>
    <script>
  </body>
</html>
