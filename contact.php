<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css">
    <link rel="shortcut icon" href="../assets/icons/DeskMitra Favicon.png" type="image/x-icon">
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
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
        <h1 class="text-dark-emphasis section-htext1 text-center my-4">Contact Us</h1>

        <div class="container my-3">
            <div class="row">
                <div class="col-md-8 col-sm-12">
                    <p>Contact us about anything related to our company or services.  <br>
                    We'll do our best to get back to you as soon as possible.</p>
                    <form action="user_contact_form.php" name="user_contact_form" method="POST" onsubmit='return userContactForm(event)' class="row g-2">
                        <div class="col-md-6 col-sm-12">
                            <label for="name" class="form-label">Name *</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter full name" oninput="userContactForm(event, 'name')">
                            <span class="error rounded p-1 px-3 my-2" id="nameError"></span>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <label for="phone_number" class="form-label">Phone Number *</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">+91</div>
                                </div>
                            <input type="text"  oninput="userContactForm(event, 'phone')" name="phone_number" id="phoneNumber" placeholder="Enter 10 digit phone number" class="form-control">
                            </div>
                            <span class="error rounded p-1 px-3 my-2" id="phoneNumberError"></span>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email *</label>
                            <input type="email" name="email" id='email' placeholder="Enter your email" class="form-control" oninput="userContactForm(event, 'email')">
                            <span class="error rounded p-1 px-3 my-2" id="emailError"></span>
                        </div>
                        <div class="form-group">
                            <label for="subject" class="form-label">Subject *</label>
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter subject of query" oninput="userContactForm(event, 'subject')">
                            <span class="error rounded p-1 px-3 my-2" id="subjectError"></span>
                        </div>
                        <div class="form-group">
                            <label for="query" class="form-label">Query *</label>
                            <textarea name="query" id="query" class="form-control" placeholder="describe your query" oninput="userContactForm(event, 'query')"></textarea>
                            <span class="error rounded p-1 px-3 my-2" id="queryError"></span>
                        </div>
                        <div class="text-center py-3">
                            <input type="submit" value="Submit" class="btn btn-primary px-5 py-2">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 col-sm-12">
                <p style="font-weight: 800; font-size: 20px;">DeskMitra</p>
                <p><i class="fa-solid fa-location-dot"></i>&nbsp;&nbsp;&nbsp;Konkan Railway Road, Rawanfond, Navelim, Margao, Goa - 403707 <br>
                <i class="fa-solid fa-phone"></i>&nbsp;&nbsp;&nbsp;+91 7499428403 <br><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp;&nbsp;connect.deskmitra@gmail.com</p>
                </div>
            </div>
        </div>
    </main>

    <!-- footer section -->
     <footer>
        <?php require_once("footer.php"); ?>
     </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/1757314b6a.js" crossorigin="anonymous"></script>
    <script src="user_contact_form.js"></script>
</body>
</html>