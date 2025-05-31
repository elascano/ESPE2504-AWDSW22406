function calculateFine() {
      const teamName = document.getElementById("teamName").value.trim();
      const yellowCards = parseInt(document.getElementById("yellowCards").value) || 0;
      const redCards = parseInt(document.getElementById("redCards").value) || 0;

      const fine = yellowCards * 1 + redCards * 3;

      const result = document.getElementById("result");

      if (teamName === "") {
        result.textContent = "Please enter a team name.";
      } else {
        result.textContent = `Total fine for "${teamName}" is $${fine.toFixed(2)}.`;
      }
    }