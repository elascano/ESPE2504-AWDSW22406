function validation_email() {

    let espe_email = document.getElementById('espe_email').value;

    if (!(/^[a-zA-Z0-9._%]+@[a-zA-Z0-9._%]+\.[a-zA-Z]{2,}$/.test(espe_email))) {
        alert('[ERROR] The email must contain an @ and an sufix like .com with 2 letters at least ');
        return false;
    } else {
        alert('[CORRECT] The email is correct :)');;
        return true;
    }
}