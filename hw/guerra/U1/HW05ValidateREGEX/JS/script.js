document.forms["registerform"].addEventListener("submit", function(event) {
    let code = document.getElementById('code').value.trim();
    let codeRegex = /^AG-\d{4}-[A-Z]{2}$/;

    if (!code) {
        alert("All fields are required.");
        event.preventDefault();
    }

    if (!codeRegex.test(code)) {
        alert("Please enter a valid code in the format AG-####-XX");
        event.preventDefault();
    }
});


document.getElementById('code').addEventListener('input',function(event){
    const msg = document.getElementById("code_message");
    let code = document.getElementById('code').value.trim();
    let codeRegex = /^AG-\d{4}-[A-Z]{2}$/;

    if (!codeRegex.test(code)) {
        document.getElementById("code").style.border = "2px solid red";
        msg.textContent = "The code must be in this formar: AG-####-XX";
        msg.style.color = "red";
        event.preventDefault();
    }else{
        document.getElementById('code').style.border = "2px solid green";
        msg.textContent = "Acceptable code";
        msg.style.color = "green";
        
    }
});

