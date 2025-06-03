document.getElementById("validateBtn").addEventListener("click", () => {
  const input = document.getElementById("dateInput").value.trim();
  const message = document.getElementById("message");

  const regex = /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/\d{4}$/;

  if (regex.test(input)) {
    message.textContent = "✅ Valid date format.";
    message.className = "output success";
  } else {
    message.textContent = "❌ Invalid format. Use dd/mm/yyyy.";
    message.className = "output error";
  }
});
