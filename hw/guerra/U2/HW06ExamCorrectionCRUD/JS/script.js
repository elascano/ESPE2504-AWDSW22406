
document.forms["registerform"].addEventListener("submit", function(event) {
    let teamId = document.getElementById('teamId').value.trim();
    let scored = document.getElementById('scored').value.trim();
    let received = document.getElementById('received').value.trim();
    
    if (!scored || !received || !teamId) {
        alert("All fields are required.");
        event.preventDefault();
    }

});

document.getElementById('teamId').addEventListener('input',function(event){
    let teamId = document.getElementById('teamId').value.trim();
    const msg = document.getElementById("messageTeam");
    let scoredRegex = /^TM\d{2}$/;

    if (!scoredRegex.test(teamId)) {
        document.getElementById("teamId").style.border = "2px solid red";
        msg.textContent = "The team ID must be in the format TM##";
        msg.style.color = "red";
    } else {
        document.getElementById('teamId').style.border = "2px solid green";
        msg.textContent = "Acceptable Team Id";
        msg.style.color = "green";
    }
});


document.getElementById('scored').addEventListener('input',function(event){
    let scored = document.getElementById('scored').value.trim();
    const msg = document.getElementById("messageScored");

    if ( scored < 0 || scored > 100) {
        document.getElementById("scored").style.border = "2px solid red";
        msg.textContent = "The score must be between 0 and 100.";
        msg.style.color = "red";
        event.preventDefault();
    } else {
        document.getElementById('scored').style.border = "2px solid green";
        msg.textContent = "Acceptable number of goals scored";
        msg.style.color = "green";
    }
});

document.getElementById('received').addEventListener('input',function(event){
    let received = document.getElementById('received').value.trim();
    const msg = document.getElementById("messageReceived");

    if ( received < 0 || received > 100) {
        document.getElementById("received").style.border = "2px solid red";
        msg.textContent = "The score must be between 0 and 100.";
        msg.style.color = "red";
        event.preventDefault();
    } else {
        document.getElementById('received').style.border = "2px solid green";
        msg.textContent = "Acceptable number of goals received";
        msg.style.color = "green";
    }
});


document.getElementById('scored').addEventListener('input', function(event) {
    let scored = parseInt(document.getElementById('scored').value.trim(), 10);
    let received = parseInt(document.getElementById('received').value.trim(), 10);  

    const msg = document.getElementById("difference");
    let difference = scored - received;

    if (!isNaN(scored) && !isNaN(received)) {
        let sign = difference > 0 ? "+" : "";
        msg.textContent = "⚽" + `Goal difference:  ${sign}${difference}`;
        msg.style.color = "blue";
    } else {
        msg.textContent = "";
        msg.style.border = "none";
    }
});