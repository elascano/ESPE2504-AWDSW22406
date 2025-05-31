document.getElementById("submit").addEventListener("click", function() {
    event.preventDefault();
    let personal_id= document.getElementById("personal_id").value;
    let regex = /^[0-9]{10}$/;
    if (!regex.test(personal_id)) {
        alert("Invalid personal id, the number must be 10 digits");
        return;
    }
    let regex_first_num = /^[0-3]/;
    
    if (!regex_first_num.test(personal_id)) {
        alert("Invalid personal id, first number must be 0-3");
        return;
    }

    

    if(personal_id[0] == 0 || personal_id[0] == 1) {
        let regex_second_num = /^[0-1][0-9]/;
        if (!regex_second_num.test(personal_id)) {
        alert("Invalid personal id, first numberis 0-1 and the second number must be 0-9");
        return;
    }
    }else if (personal_id[0] == 2) {
        let regex_second_num = /^2[0-4]/;
            if (!regex_second_num.test(personal_id)) {
                alert("Invalid personal id, if first number is 2 and the second number must be 0-4");
                return;
            }
    }else if (personal_id[0] == 3) {
        console.log("here");
        let regex_second_num = /^30/;
        if (!regex_second_num.test(personal_id)) {
            alert("Invalid personal id, if first number is 3 and the second number must be 0");
            return;
        }
    }

    let regex_third_num = /^\d\d[0-6][0-9]+/;
    if (!regex_third_num.test(personal_id)) {
        alert("Invalid personal id, first number must be 0-3");
        return;
    }

    document.getElementById("result").innerHTML = "Valid personal Id";
});