function validatePhone() {
    const phone = document.getElementById('cellPhone').value.trim();
    const phonePattern = /^\+\d{2,3}\s\d{9}$/;

    if (!phonePattern.test(phone)) {
        alert('[ERROR] The phone number must include an international prefix (e.g., +593 961075852).');
    } else {
        alert('[CORRECT] Phone number format is valid.');
    }
}
