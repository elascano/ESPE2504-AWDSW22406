document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("registerForm");

  form.addEventListener("submit", (e) => {
    const name = document.getElementById("name").value.trim();
    const lastName = document.getElementById("lastName").value.trim();
    const studentId = document.getElementById("studentId").value.trim();
    const password = document.getElementById("password").value;
    const genderSelected = document.querySelector('input[name="gender"]:checked');

    let errorMessage = "";

    if (name === "" || lastName === "" || studentId === "" || password === "") {
      errorMessage += "All fields are required.\n";
    }

    if (password.length < 6) {
      errorMessage += "Password must be at least 6 characters.\n";
    }

    if (!genderSelected) {
      errorMessage += "Please select your gender.\n";
    }

    if (errorMessage !== "") {
      e.preventDefault();
      alert(errorMessage);
    }
  });
});
