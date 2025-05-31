function validate(){ 
    let text = document.getElementById("product").value;
    
   if (/[áéíóúÁÉÍÓÚ]/.test(text)) {
        document.getElementById("answer").innerHTML = "Contains at least one accented character.";
    } else {
        document.getElementById("answer").innerHTML = "Does not contain any accented characters.";
    }
}
