document.addEventListener("DOMContentLoaded", function () {
    const form = document.forms["registerform"];
    const scoredInput = document.getElementById('scored');
    const receivedInput = document.getElementById('received');
    const differenceDiv = document.getElementById("difference");
    const messageScored = document.getElementById("messageScored");
    const messageReceived = document.getElementById("messageReceived");

    let hiddenDifference = document.getElementById('hiddenDifference');
    if (!hiddenDifference) {
        hiddenDifference = document.createElement('input');
        hiddenDifference.type = 'hidden';
        hiddenDifference.name = 'difference';
        hiddenDifference.id = 'hiddenDifference';
        form.appendChild(hiddenDifference);
    }

    form.addEventListener("submit", function(event) {
        const scored = scoredInput.value.trim();
        const received = receivedInput.value.trim();

        if (!scored || !received) {
            alert("All fields are required.");
            event.preventDefault();
            return;
        }

        const difference = parseInt(scored) - parseInt(received);
        hiddenDifference.value = difference;
    });

    scoredInput.addEventListener('input', function (event) {
        const scored = parseInt(scoredInput.value.trim());
        if (isNaN(scored) || scored < 0 || scored > 100) {
            scoredInput.style.border = "2px solid red";
            messageScored.textContent = "The score must be between 0 and 100.";
            messageScored.style.color = "red";
        } else {
            scoredInput.style.border = "2px solid green";
            messageScored.textContent = "Acceptable number of goals scored";
            messageScored.style.color = "green";
        }
        updateDifference();
    });

    receivedInput.addEventListener('input', function (event) {
        const received = parseInt(receivedInput.value.trim());
        if (isNaN(received) || received < 0 || received > 100) {
            receivedInput.style.border = "2px solid red";
            messageReceived.textContent = "The score must be between 0 and 100.";
            messageReceived.style.color = "red";
        } else {
            receivedInput.style.border = "2px solid green";
            messageReceived.textContent = "Acceptable number of goals received";
            messageReceived.style.color = "green";
        }
        updateDifference();
    });

    function updateDifference() {
        const scored = parseInt(scoredInput.value.trim());
        const received = parseInt(receivedInput.value.trim());

        if (!isNaN(scored) && !isNaN(received)) {
            const diff = scored - received;
            const sign = diff > 0 ? "+" : "";
            differenceDiv.textContent = "⚽ Goal difference: " + sign + diff;
            differenceDiv.style.color = "blue";
            hiddenDifference.value = diff;
        } else {
            differenceDiv.textContent = "";
            differenceDiv.style.border = "none";
            hiddenDifference.value = "";
        }
    }

    updateDifference();
});
