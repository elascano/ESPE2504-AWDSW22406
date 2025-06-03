function validateEmail() {
    const email = document.getElementById('email').value;
    const result = document.getElementById('emailResult');
    // Simple email regex
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (emailRegex.test(email)) {
        result.textContent = "Valid email address.";
        result.style.color = "green";
    } else {
        result.textContent = "Invalid email address.";
        result.style.color = "red";
    }
}