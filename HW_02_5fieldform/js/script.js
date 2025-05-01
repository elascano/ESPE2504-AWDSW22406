function validateForm(event) {
    let isValid = true;
    const name = document.getElementById('name');
    const lastname = document.getElementById('lastname');
    const id = document.getElementById('id');
    const password = document.getElementById('password');
    const sex = document.querySelector('input[name="sex"]:checked');
    name.setCustomValidity('');
    lastname.setCustomValidity('');
    id.setCustomValidity('');
    password.setCustomValidity('');
    if (name.value.length < 4) {
        name.setCustomValidity('Name must be at least 4 characters');
        isValid = false;
    }
    if (lastname.value.length < 4) {
        lastname.setCustomValidity('Last Name must be at least 4 characters');
        isValid = false;
    }
    if (id.value.length !== 9) {
        id.setCustomValidity('ID must be exactly 9 characters');
        isValid = false;
    }
    if (password.value.length < 1) {
        password.setCustomValidity('Password is required');
        isValid = false;
    }
    if (!sex) {
        document.getElementById('male').setCustomValidity('Please select a sex');
        isValid = false;
    } else {
        document.getElementById('male').setCustomValidity('');
        document.getElementById('female').setCustomValidity('');
    }
    if (!isValid) {
        document.getElementById('studentForm').reportValidity();
        event.preventDefault();
    }
    return isValid;
}
document.getElementById('studentForm').addEventListener('submit', validateForm);