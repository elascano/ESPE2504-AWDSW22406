document.forms["registerform"].addEventListener("submit", function(event) {
    let name = document.getElementById("login").value.trim();
    let destinationDate = document.getElementById('password').value.trim();
    let reasonTrip = document.getElementById('password').value.trim();

    if (!name || !destinationDate || !reasonTrip) {
        alert("All fields are required.");
        event.preventDefault();
    }
});

document.getElementById('name').addEventListener('input',function(event){
    const msg = document.getElementById("name_message");
    let name = document.getElementById('name').value.trim();
    let nameRegex = /^[A-Za-z\s]+$/;

    if (name.length < 4 || !nameRegex.test(name)) {
        document.getElementById("name").style.border = "2px solid red";
        msg.textContent = "The name must be at least 4 characters and contain only letters";
        msg.style.color = "red";
        event.preventDefault();
    }else{
        document.getElementById('name').style.border = "2px solid green";
        msg.textContent = "Acceptable name";
        msg.style.color = "green";
    }
});

document.getElementById('destinationDate').addEventListener('input',function(event){
    const msg = document.getElementById("destinationDate_message");
    const today = new Date().toISOString().split('T')[0];
    const date = document.getElementById('destinationDate').value;
    let valido = true;

      if (!date || date === today) {
        document.getElementById("destinationDate").style.border = "2px solid red";
        msg.textContent = "You have to select a date different from today";
        msg.style.color = "red";
      } else {
        document.getElementById("destinationDate").style.border = "2px solid green";
        msg.textContent = "Acceptable destination Date";
        msg.style.color = "green";
      }
});

document.getElementById('reasonTrip').addEventListener('input', function(event) {
    const msg = document.getElementById("reasonTrip_message");
    let reasonTrip = document.getElementById('reasonTrip').value.trim();
    let reasonTripRegex = /^[A-Za-z\s]+$/;

    if (reasonTrip.length < 20 || !reasonTripRegex.test(reasonTrip)) {
        document.getElementById("reasonTrip").style.border = "2px solid red";
        msg.textContent = `There are ${20 - reasonTrip.length} characters left, and the input must contain only letters.`;
        msg.style.color = "red";
        event.preventDefault();
    } else {
        document.getElementById('reasonTrip').style.border = "2px solid green";
        msg.textContent = "Acceptable reason for the trip";
        msg.style.color = "green";
    }
});


document.getElementById("destinationDate").addEventListener("change", function () {
    const inputDate = new Date(this.value);
    const today = new Date();
    const diffInDays = Math.ceil((inputDate - today) / (1000 * 60 * 60 * 24));

    const result = document.getElementById("result_output");
    result.textContent = `Your trip is ${Math.abs(diffInDays)} day(s) ${diffInDays < 0 ? 'in the past' : 'in the future'}.`;
});

