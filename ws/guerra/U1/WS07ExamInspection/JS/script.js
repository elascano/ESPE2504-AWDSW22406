
document.forms["registerform"].addEventListener("submit", function(event) {
    let scored = document.getElementById("scored").value.trim();
    let received = document.getElementById('received').value.trim();

    if (!login || !password) {
        alert("All fields are required.");
        event.preventDefault();
    }


document.getElementById('scored').addEventListener('input',function(){
    const msg = document.getElementById("difference");
    let scored = document.getElementById('scored').value.trim();
    let received = document.getElementById('received').value.trim();
    let difference = received-scored;

    document.getElementById('scored').style.border = "2px solid green";
    msg.textContent = "You have scored"+scored;
    msg.style.color = "green";
});