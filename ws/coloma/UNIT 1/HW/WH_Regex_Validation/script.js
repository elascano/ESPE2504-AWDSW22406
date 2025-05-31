function validateCode() {
  const code = document.getElementById("codeInput").value;
  const pattern = /^L00\d{5,}$/; // Must start with L00 and 5+ digits

  const message = document.getElementById("message");
  if (pattern.test(code)) {
    message.textContent = "✅ Valid Code!";
    message.style.color = "green";
  } else {
    message.textContent = "❌ Invalid. Must start with 'L00' followed by 5+ digits.";
    message.style.color = "red";
  }
}
