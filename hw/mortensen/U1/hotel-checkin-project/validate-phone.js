
function isSequential(number) {
    const ascending = '0123456789';
    const descending = '9876543210';
    return ascending.includes(number) || descending.includes(number);
}

function isAllEven(number) {
    return [...number].every(d => parseInt(d) % 2 === 0);
}

function validateForm() {
    const name = document.getElementById('fullName').value.trim();
    const reservation = document.getElementById('reservationCode').value.trim();
    const phone = document.getElementById('cellPhone').value.trim();
    const outputDiv = document.getElementById('output');

    const namePattern = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]{3,}$/;
    const reservationPattern = /^\d{6}$/;
    const phonePattern = /^\+\d{2,3}\s\d{9}$/;

    if (!namePattern.test(name)) {
        alert('[ERROR] Please enter a valid full name (at least 3 letters).');
        outputDiv.innerHTML = "";
        return false;
    }

    if (!reservationPattern.test(reservation)) {
        alert('[ERROR] Reservation code must be exactly 6 digits.');
        outputDiv.innerHTML = "";
        return false;
    }

    if (isSequential(reservation)) {
        alert('[ERROR] Reservation code must not be a sequential number (e.g., 123456 or 654321).');
        outputDiv.innerHTML = "";
        return false;
    }

    if (isAllEven(reservation)) {
        alert('[ERROR] Reservation code must not contain only even digits.');
        outputDiv.innerHTML = "";
        return false;
    }

    if (!phonePattern.test(phone)) {
        alert('[ERROR] Phone number must have international format (e.g., +593 961075852).');
        outputDiv.innerHTML = "";
        return false;
    }

    alert('[CORRECT] All fields are valid. Thank you!');
    outputDiv.innerHTML = `
        Full Name: <b>${name}</b><br>
        Reservation Code: <b>${reservation}</b><br>
        Phone Number: <b>${phone}</b>
    `;
    return true;
}

