document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById('employeeForm'); 
    form.addEventListener('submit', function(event) {
        event.preventDefault(); 


        const firstName = document.getElementById('firstName').value.trim();
        const lastName = document.getElementById('lastName').value.trim();
        const email = document.getElementById('email').value.trim();
        const position = document.querySelector('input[name="position"]:checked');
        const startDate = document.getElementById('startDate').value.trim();
        const salary = document.getElementById('salary').value.trim();
        const fullTime = document.getElementById('fullTime').checked;


        if (!firstName || !lastName || !email) {
            alert('Por favor, llena todos los campos obligatorios.');
            return;
        }

        const nameRegex = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;
        if (!nameRegex.test(firstName) || !nameRegex.test(lastName)) {
            alert('El nombre y el apellido solo deben contener letras.');
            return;
        }


        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            alert('Por favor, ingresa un correo electrónico válido.');
            return;
        }

        if (!position) {
            alert('Por favor, selecciona un puesto.');
            return;
        }


        if (!salary || salary <= 0) {
            alert('Por favor, ingresa un salario válido.');
            return;
        }


        if (!startDate) {
            alert('Por favor, ingresa una fecha de inicio.');
            return;
        }


        form.submit();
    });
});
