document.getElementById("cardForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const cardNumberInput = document.getElementById("cardNumber");
  const cardNumber = cardNumberInput.value.replace(/\s+/g, ""); // quitar espacios

  const messageDiv = document.getElementById("message");

  // Regex para Visa (empieza con 4, 13 o 16 dígitos), MasterCard (51-55 o 2221-2720, 16 dígitos), AMEX (34 o 37, 15 dígitos)
  const visaRegex = /^4\d{12}(\d{3})?$/;
  const masterCardRegex = /^(5[1-5]\d{14}|2(2[2-9]\d{12}|[3-6]\d{13}|7[01]\d{12}|720\d{12}))$/;
  const amexRegex = /^3[47]\d{13}$/;

  if (visaRegex.test(cardNumber)) {
    messageDiv.textContent = "Valid Visa card number.";
    messageDiv.className = "valid";
  } else if (masterCardRegex.test(cardNumber)) {
    messageDiv.textContent = "Valid MasterCard number.";
    messageDiv.className = "valid";
  } else if (amexRegex.test(cardNumber)) {
    messageDiv.textContent = "Valid AMEX card number.";
    messageDiv.className = "valid";
  } else {
    messageDiv.textContent = "Invalid card number.";
    messageDiv.className = "invalid";
  }
});
