function validateEmail() {
      const emailInput = document.getElementById('email');
      const message = document.getElementById('message');
      const regex = /^example@espe\.edu\.ec$/;

      if (regex.test(emailInput.value)) {
        message.textContent = 'Valid email ✔️';
        message.className = 'message valid';
      } else {
         message.textContent = 'Invalid email ❌';
        message.className = 'message invalid';
      }
    }