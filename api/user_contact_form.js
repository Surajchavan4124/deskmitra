// User contact form validations

function userContactForm(event, field) {
  // retrieving values from the form
  const form = document.forms["user_contact_form"];
  const name = form.name.value.trim();
  const phoneNumber = form.phone_number.value.trim();
  const email = form.email.value.trim();
  const subject = form.subject.value.trim();
  const query = form.query.value.trim();

  //retrieving error span elements
  const nameError = document.getElementById("nameError");
  const phoneNumberError = document.getElementById("phoneNumberError");
  const emailError = document.getElementById("emailError");
  const subjectError = document.getElementById("subjectError");
  const queryError = document.getElementById("queryError");

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

  //validate subject
  function validateSubject() {
    if (subject == "") {
      subjectError.style.display = "block";
      subjectError.innerText = "subject field cannot be empty";
      validate = false;
    } else if (
      !/^[a-zA-Z0-9\s_.,"':()@#!$%^&*+=<>?\-]{10,200}$/.test(subject)
    ) {
      subjectError.style.display = "block";
      subjectError.innerText =
        "Subject length should be between 20 and 200 letters.";
      validate = false;
    } else {
      subjectError.style.display = "none";
      subjectError.innerText = "";
    }
  }

  //validate query
  function validateQuery() {
    if (query == "") {
      queryError.style.display = "block";
      queryError.innerText = "Query field cannot be empty";
      validate = false;
    } else if (!/^[a-zA-Z0-9\s_.,"':()@#!$%^&*+=<>?\-]{100,500}$/.test(query)) {
      queryError.style.display = "block";
      queryError.innerText =
        "Query length should be between 100 and 500 letters.";
      validate = false;
    } else {
      queryError.style.display = "none";
      queryError.innerText = "";
    }
  }

  //preventing validation of all fields at once to avoid validation =without entering to that field
  if (field === "name") {
    validateName();
  } else if (field === "phone") {
    validatePhoneNumber();
  } else if (field === "email") {
    validateEmail();
  } else if (field === "subject") {
    validateSubject();
  } else if (field === "query") {
    validateQuery();
  } else {
    validateName();
    validatePhoneNumber();
    validateEmail();
    validateSubject();
    validateQuery();
  }

  //to prevent empty form submiaaion
  if (!validate && event && event.type === "submit") {
    event.preventDefault();
  }

  return validate;
}

//----------------------------------------------------------------------------------------------------------------

