const regexn = /\d/;
const regexl = /[a-zA-Z]/;


function validatetxtLocation(){
    let value = document.getElementById("txtLocation").value.trim();
    if(value === "" || regexn.test(value)){
        alert("It cannot be empty or contain numbers.");
        document.getElementById(id).value = "";
        return false;
    }
    return true;
}

function validatetxtOwnerName(){
    let value = document.getElementById("txtOwnerName").value.trim();
    if(value === "" || regexn.test(value)){
        alert("It cannot be empty or contain numbers.");
        document.getElementById(id).value = "";
        return false;
    }
    return true;
}

function validatetxtStoreName(){
    let value = document.getElementById("txtStoreName").value.trim();
    if(value === "" || regexn.test(value)){
        alert("It cannot be empty or contain numbers.");
        document.getElementById(id).value = "";
        return false;
    }
    return true;
}

function validateRadio(){
    let options = document.getElementsByName("storeType");
    for(let i = 0; i < options.length; i++){
        if(options[i].checked){
            return true;
        }
    }
    alert("Please select a store type.");
    return false;
}

function validateCheckbox(){
    let checkboxes = document.getElementsByName("categories[]");
    for(let i = 0; i < checkboxes.length; i++){
        if(checkboxes[i].checked){
            return true;
        }
    }
    alert("Please select at least one product category.");
    return false;
}

function validateForm(){
    if(!validatetxtLocation() || !validatetxtOwnerName() || !validatetxtStoreName() || !validateRadio() || !validateCheckbox()){
        
        return false;    
    }
    alert("The form is valid");
    return true;
}