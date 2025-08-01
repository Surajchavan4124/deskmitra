// User contact form validations

function ugAdmissionForm(event, field) {
  // retrieving values from the form
  const form = document.forms["ug_admission_form"];
  const name = form.name.value.trim();
  const phoneNumber = form.phone_number.value.trim();
  const email = form.email.value.trim();
  const gender = document.querySelector('input[name="gender"]:checked');
  const dateOfBirth = form.date_of_birth.value;
  const category = form.category.value;
  const address = form.address.value;
  const consent = document.querySelector("input[name='consent']:checked");


  //retrieving error span elements
  const nameError = document.getElementById("nameError");
  const phoneNumberError = document.getElementById("phoneNumberError");
  const emailError = document.getElementById("emailError");
  const genderError = document.getElementById("genderError");
  const dateOfBirthError = document.getElementById("dateOfBirthError");
  const categoryError = document.getElementById("categoryError");
  const addressError = document.getElementById("addressError");
  const consentError = document.getElementById("consentError");

  // validation status variable
  let validate = true;

  //name validation
  function validateName() {
    if (name == "") {
      nameError.style.display = "block";
      nameError.innerText = "Name field cannot be empty";
      validate = false;
    } else if (!/^[a-zA-Z\.\s]{1,30}$/.test(name)) {
      nameError.style.display = "block";
      nameError.innerText = "Name can contain only letters.";
      validate = false;
    } else {
      nameError.style.display = "none";
      nameError.innerText = "";
    }
  }

  //phone number validation
  function validatePhoneNumber() {
    if (phoneNumber == "") {
      phoneNumberError.style.display = "block";
      phoneNumberError.innerText = "Phone number field cannot be empty";
      validate = false;
    } else if (!/^[6789]\d{9}$/.test(phoneNumber)) {
      phoneNumberError.style.display = "block";
      phoneNumberError.innerText = "Enter a valid 10 digit mobile number.";
      validate = false;
    } else {
      phoneNumberError.style.display = "none";
      phoneNumberError.innerText = "";
    }
  }

  //validate email
  function validateEmail() {
    if (email == "") {
      emailError.style.display = "block";
      emailError.innerText = "Email field cannot be empty";
      validate = false;
    } else if (
      !/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/.test(email)
    ) {
      emailError.style.display = "block";
      emailError.innerText = "Enter a valid email id.";
      validate = false;
    } else {
      emailError.style.display = "none";
      emailError.innerText = "";
    }
  }

  function genderValidation() {
        if (!gender) {
          genderError.innerText = "Please select a gender";
          genderError.style.display = "block";
          validate = false;
        } else {
           genderError.innerText = "";
           genderError.style.display = "none";
        } 
  }

  function validateDateOfBirth() {
    if (dateOfBirth == "") {
        dateOfBirthError.innerText = "Please select date of birth";
        dateOfBirthError.style.display = "block";
        validate = false;
    } else if (dateOfBirth > '2008-01-01') {
        dateOfBirthError.innerText = "Please select a valid date of birth";
        dateOfBirthError.style.display = "block";
        validate = false;
    } else {
        dateOfBirthError.innerText = "";
        dateOfBirthError.style.display = "none";
    }
  }

  function validateCategory() {
    if (category == '#' || category == "") {
        categoryError.innerText = "Please select a category";
        categoryError.style.display = "block";
        validate = false;
    } else {
        categoryError.innerText = '';
        categoryError.style.display = 'none';
    }
  }

  function validateAddress() {
    if (address == '') {
        addressError.innerText = "Please enter the address";
        addressError.style.display = "block";
        validate = false;
    } else if (!/^[a-zA-Z\s\d-\.\_,\/|:"')(&]{10,}$/.test(address)) {
        addressError.innerText = "Please enter a valid address";
        addressError.style.display = "block";
        validate = false;
    } else {
        addressError.innerText = '';
        addressError.style.display = "none";
    }
  }

  function validateConsent() {
    if (!consent) {
        consentError.innerText = "Please accept the consent";
        consentError.style.display = "block";
        validate = false;
    } else {
        consentError.innerText = "";
        consentError.style.display = "none";
    }
  }

  //preventing validation of all fields at once to avoid validation =without entering to that field
  if (field === "name") {
    validateName();
  } else if (field === "phone") {
    validatePhoneNumber();
  } else if (field === "email") {
    validateEmail();
  } else if (field === 'gender') {
    genderValidation();
  } else if (field === 'dob') {
    validateDateOfBirth();
  } else if (field === 'category') {
    validateCategory();
  } else if (field === 'address') {
    validateAddress();
  } else if (field === 'consent') {
    validateConsent();
  } else {
    validateName();
    validatePhoneNumber();
    genderValidation();
    validateEmail();
    validateDateOfBirth();
    validateCategory();
    validateAddress();
    validateConsent();
  }

  //to prevent empty form submiaaion
  if (!validate && event && event.type === "submit") {
    event.preventDefault();
  }

  return validate;
}

//----------------------------------------------------------------------------------------------------------------
