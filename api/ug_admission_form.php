<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <title>about us</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.6.0/css/fontawesome.min.css">
    <link rel="shortcut icon" href="assets/icons/DeskMitra Favicon.png" type="image/x-icon">
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
        <h1 class="text-dark-emphasis section-htext2 text-center my-4">UG Admission (Goa) Assistance</h1>
        <div class="container rounded border border-0 shadow my-5 p-4">
            <form action="ug_admission_insert.php" name="ug_admission_form" method="POST" onsubmit="return ugAdmissionForm(event)" class="row g-3">
        <div class="col-md-6 col-sm-12 form-group">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Applicant's full name" oninput="ugAdmissionForm(event, 'name')">
            <span class="error rounded p-1 px-3 my-2" id="nameError"></span>
        </div>

        <div class="col-md-6 col-sm-12 form-group">
            <label for="phone_number" class="form-label">Phone Number</label>
            <div class="input-group">
                <div class="input-group-prepend">
                     <div class="input-group-text">+91</div>
                </div>
            <input type="text" name="phone_number" id="phone_number" class="form-control" placeholder="Enter 10-digit Phone Number" oninput="ugAdmissionForm(event, 'phone')">
            </div>
            <span class="error rounded p-1 px-3 my-2" id="phoneNumberError"></span>
        </div>

        <div class="col-md-6 col-sm-12 form-group">
            <label for="email" class="form-label">Email</label>
            <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email Address" oninput="ugAdmissionForm(event, 'email')">
            <span class="error rounded p-1 px-3 my-2" id="emailError"></span>
        </div>
        <div class="col-md-6 col-sm-12 form-group">
            <label for="gender" class="form-label">Applicant's Gender</label><br>
            <input type="radio" name="gender" id="male" value="male" class="form-check-input" oninput="ugAdmissionForm(event, 'gender')">&nbsp;<label for="male" class="form-check-label">Male</label><br>
            <input type="radio" name="gender" id="female" value="female" class="form-check-input" oninput="ugAdmissionForm(event, 'gender')">&nbsp;<label for="female" class="form-check-label">Female</label><br>
            <input type="radio" name="gender" id="other" value="other" class="form-check-input" oninput="ugAdmissionForm(event, 'gender')">&nbsp;<label for="other" class="form-check-label">Other</label>
            <span class="error rounded p-1 px-3 my-2" id="genderError"></span>
        </div>
        <div class="col-md-3 col-sm-12 form-group">
            <label for="date of birth" class="form-label">Applicant's Date of Birth</label>
            <input type="date" name="date_of_birth" id="dateOfBirth" class="form-control" oninput="ugAdmissionForm(event, 'dob')">
            <span class="error rounded p-1 px-3 my-2" id="dateOfBirthError"></span>
        </div>
        <div class="col-md-3 col-sm-12 form-group">
            <label for="category" class="form-label">Select Category</label>
            <select name="category" id="category" class="form-select" oninput="ugAdmissionForm(event, 'category')">
                <option value="#" selected disabled>Select Category</option>
                <option value="general">General</option>
                <option value="sc">SC</option>
                <option value="st">ST</option>
                <option value="obc">OBC</option>
                <option value="others">Others</option>
            </select>
            <span class="error rounded p-1 px-3 my-2" id="categoryError"></span>
        </div>
        <div class="col-md-6 col-sm-12 form-group">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" class="form-control" oninput="ugAdmissionForm(event, 'address')" placeholder="Enter full address. Eg H. No .... , lane/apartment/area/ward, city, district, state, pincode"></textarea>
            <span class="error rounded p-1 px-3 my-2" id="addressError"></span>
            <input type="hidden" name="application_type" id="application_type" value="ug admission">
        </div>
        <div class="col-md-12 col-sm-12 form group">
            <input type="checkbox" class="form-check-input" name="consent" id="consent" value="consent" onchange="ugAdmissionForm(event, 'consent')">
            <label for="consent" class="form-check-label">&nbsp; I allow DeskMitra team to contact me on the above provided phone number or email for further process of admission.</label>
            <span class="error rounded p-1 px-3 my-2" id="consentError"></span>
        </div>

        <div class="col-12 mt-4 text-end">
            <button type="reset" class="btn btn-danger">Clear form</button>
            &nbsp;
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
</form>
</div>
    </main>

    <!-- footer section -->
     <footer>
        <?php require_once("footer.php"); ?>
     </footer>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/1757314b6a.js" crossorigin="anonymous"></script>
    <script src="ug_admission_form_handler.js"></script>
</body>
</html>