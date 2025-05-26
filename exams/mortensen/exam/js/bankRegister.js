
document.getElementById("formBanco").addEventListener("submit", function(e) {
  e.preventDefault();
  const formData = new FormData(this);
  
  fetch("../php/bankRegister.php", {
    method: "POST",
    body: formData
  })
  .then(res => res.text())
  .then(data => {
    document.getElementById("respuesta").innerHTML = data;
  })
  .catch(err => {
    document.getElementById("respuesta").innerHTML = "Error de conexión.";
  });
});


