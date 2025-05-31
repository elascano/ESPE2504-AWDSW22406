function validateDate() {
    const date = document.getElementById("date").value;
    const regex = /^(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[012])\/\d{4}$/;
    const result = document.getElementById("result");
  
    if (regex.test(date)) {
      result.textContent = "✅ Valid date.";
      result.style.color = "green";
    } else {
      result.textContent = "❌ Invalid format.";
      result.style.color = "red";
    }
  }
  