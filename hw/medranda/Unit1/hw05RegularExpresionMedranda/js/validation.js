  document.getElementById("passwordForm").addEventListener("submit", function (e) {
    e.preventDefault();

    const input = document.getElementById("password");
    const label = document.getElementById("msgLabel");
    const password = input.value.trim();

    const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&.#_-])[A-Za-z\d@$!%*?&.#_-]{8,}$/;

    if (regex.test(password)) {
      input.classList.remove("is-invalid");
      input.classList.add("is-valid");
      label.textContent = "✅ Password Valid.";
      label.classList.remove("text-danger");
      label.classList.add("text-success");
    } else {
      input.classList.remove("is-valid");
      input.classList.add("is-invalid");
      label.textContent = "❌ Not valid";
      label.classList.remove("text-success");
      label.classList.add("text-danger");
    }
  });