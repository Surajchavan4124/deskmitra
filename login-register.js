// Login register page toggle
const container = document.querySelector(".container");
const registerBtn = document.querySelector(".register-btn");
const loginBtn = document.querySelector(".login-btn");

registerBtn.addEventListener("click", () => {
  container.classList.add("active");
});

loginBtn.addEventListener("click", () => {
  container.classList.remove("active");
});

//Login validations
function validateLogin() {

  // Getting form values
  const form = document.forms["login_form"];
  const username = form.username.value.trim();
  const password = form.password.value.trim();

  // Validation
  if (username === "" || password === "") {
    window.alert("All fields are required!");
    return false;
  } 
  return true;
}


//Registration validations
function validateRegister() {

  // Getting form values
  const form = document.forms["registration_form"];
  const username = form.username.value.trim();
  const password = form.password.value.trim();
  const email = form.email.value.trim();

  // Validation
  if (username === "" || password === "" || email === "") {
    window.alert("All fields are required!");
    return false;
  }

  return true;
}

