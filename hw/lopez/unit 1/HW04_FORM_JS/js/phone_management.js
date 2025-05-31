document.addEventListener("submit", function (event) {
    event.preventDefault();
    let name = document.getElementById("name").value;
    let phone = document.getElementById("phone").value;
    let email = document.getElementById("email").value;
    let phoneList = ["Iphone 1","Iphone 2","Iphone 3","Iphone 4","Iphone 5",
        "Iphone 6","Iphone 7","Iphone 8","Iphone 9","Iphone 10","Iphone 11",
        "Iphone 12","Iphone 13","Iphone 14","Iphone GX","Iphone XD","New IPhone",];
    if (name === "" || phone === "" || email === "") {
        alert("Please fill in all fields.");
        return;
    }

    if (!validateEmail(email)) {
        alert("Please enter a valid email address.");
        return;
    }

    if (!validatePhone(phone)) {
        alert("Please enter a valid phonemodel.");
        return;
    }

    if(!phone_exists(phone,phoneList)) {
        alert("Phone model isnt in the database.");
        alert("AVAILABLE PHONES: " + phoneList);
        return;
    }

    if(!validateName(name)) {
        alert("Please enter a valid name.");
        return;
    }

    document.getElementById("result").innerHTML = 
        `<p>Name: ${name}</p>
        <p>Phone: ${phone}</p>
        <p>Email: ${email}</p>`;
});

function validateEmail(email) {
    let regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

function validatePhone(phone) {
    let regex = /^[a-zA-Z0-9\s]+$/;
    return regex.test(phone);
}

function validateName(name) {
    let regex = /^[a-zA-Z\s]+$/;
    return regex.test(name);
}

function phone_exists(phone,phone_list) {
    let value = false;
    phone_list.forEach(element => {
        let phone_in_store = element.toLowerCase();
        let phone_requested = phone.toLowerCase();
        console.log(phone_in_store);
        console.log(phone_requested);
        if (phone_in_store === phone_requested) {
            value=true;
        }
    });

    return value;
}