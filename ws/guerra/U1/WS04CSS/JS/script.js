/*function viewValues(){
    let form = document.forms['registerform']
    let text ='';
    for(let element of form){
        text += element.value +'<br>';
    }
    //console.log(text);
    document.getElementById('view_values').innerHTML = text;
}*/

document.forms["registerform"].addEventListener("submit", function(event) {
    let login = document.getElementById("login").value.trim();
    let password = document.getElementById('password').value.trim();
    let regex = /^(?=.*[A-Z])(?=.*\d).{6,}$/;
    let loginRegex = /^[a-zA-Z0-9]+$/;

    if (!login || !password) {
        alert("All fields are required.");
        event.preventDefault();
    }
    
    /*if (login.length < 4) {
        alert("The login must have at least 4 characters.");
        event.preventDefault();
    }else{
        document.getElementById('login').style.border = "2px solid green";
    }*/

    /*if (regex.test(password)) {
        alert("The password must have at least 6 characters, one capital letter and one number.");
        event.preventDefault();
    }else{
        document.getElementById('password').style.border = "2px solid green";
    }else{
        document.getElementById('password').style.border = "2px solid green";
    }
    */

    /*
    let email = document.getElementById("email").value.trim();
    let emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email)) {
        alert("Please enter a valid email.");
        event.preventDefault();
    }*/


    /*if(password.length < 8){
        document.getElementById("password").style.border = "2px solid red";
        alert("The password must have at least 8 characters.");
        event.preventDefault();
    }else{
        document.getElementById('password').style.border = "2px solid green";
    }*/
});

document.getElementById('password').addEventListener('input',function(){
    const msg = document.getElementById("password_message");
    const pass = this.value;
    
    if (pass.length < 6) {
        document.getElementById("password").style.border = "2px solid red";
        msg.textContent = "Very short password";
        msg.style.color = "red";
    } else {
        document.getElementById("password").style.border = "2px solid green";
        msg.textContent = "Acceptable password";
        msg.style.color = "green";
    }
});

document.getElementById('login').addEventListener('input',function(){
    const msg = document.getElementById("login_message");
    let login = document.getElementById('login').value.trim();
    let loginRegex = /^[a-zA-Z0-9]+$/;

    if (login.length < 4 || !loginRegex.test(login)) {
        document.getElementById("login").style.border = "2px solid red";
        //alert("Login must be at least 4 characters and contain only letters and numbers.");
        msg.textContent = "Login must be at least 4 characters and contain only letters and numbers.";
        msg.style.color = "red";
        event.preventDefault();
    }else{
        document.getElementById('login').style.border = "2px solid green";
        msg.textContent = "Acceptable login";
        msg.style.color = "green";
    }
});